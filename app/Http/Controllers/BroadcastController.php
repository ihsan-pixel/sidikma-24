<?php

namespace App\Http\Controllers; // 

use App\Models\Broadcast;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\FonnteHelper;

class BroadcastController extends Controller
{
    public function index()
    {
        $broadcasts = \App\Models\Broadcast::latest()->get();

        return view('backend.broadcast.index', [
            'title' => 'Daftar Broadcast',
            'broadcasts' => $broadcasts,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',
            'image' => 'nullable|image',
            'roles' => 'nullable|array',
            'users' => 'nullable|array',
        ]);

        // Upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('broadcasts', 'public');
        }

        // Simpan broadcast
        $broadcast = Broadcast::create([
            'title' => $request->title,
            'message' => $request->message,
            'image_path' => $imagePath,
            'target_roles' => $request->roles,
            'target_users' => $request->users,
        ]);

        $imageUrl = $imagePath ? asset('storage/' . $imagePath) : null;

        // Query target users sesuai role dan user yang dipilih
        $query = User::query();

        if ($request->roles) {
            $query->whereIn('role', $request->roles);
        }
        if ($request->users) {
            $query->orWhereIn('id', $request->users);
        }

        $users = $query->get();

        // Kirim pesan WA via FonnteHelper dan log response
        foreach ($users as $user) {
            // Pastikan nomor dalam format internasional tanpa tanda plus
            $noTlp = preg_replace('/^\+/', '', $user->no_tlp);
            $response = FonnteHelper::sendMessage($noTlp, $broadcast->message, $imageUrl);
            \Log::info("Send WA to {$noTlp}", ['response' => $response]);
        }

        return redirect()->route('broadcast.index')->with('success', 'Broadcast sent!');
    }

    public function create()
    {
        $roles = [2 => 'Guru & Pegawai', 3 => 'Admin Sekolah', 4 => 'Pengurus Yayasan'];
        $users = \App\Models\User::whereIn('role', [2,3,4])->get();

        return view('backend.broadcast.create', compact('roles', 'users'))
            ->with('title', 'Tambah Broadcast');
    }
}
