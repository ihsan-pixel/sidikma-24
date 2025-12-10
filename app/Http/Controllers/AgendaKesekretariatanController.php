<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaKesekretariatan;

class AgendaKesekretariatanController extends Controller
{
    // Menampilkan semua data agenda
    public function index()
    {
        $agenda = AgendaKesekretariatan::all();
        return view('backend.agenda_kesekretariatan.view', compact('agenda'));
    }

    // Menampilkan form untuk menambah agenda baru
    public function create()
    {
        return view('backend.agenda_kesekretariatan.add');
    }

    // Menyimpan agenda baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kegiatan' => 'required|string',
            'tanggal_pelaksanaan' => 'required|date',
            'petugas' => 'required|string',
            'keterangan' => 'nullable|string',
            'catatan' => 'nullable|string',
        ]);

        // Set default jika keterangan tidak diisi
        if (empty($validated['keterangan'])) {
            $validated['keterangan'] = 'Belum Terlaksana';
        }

        AgendaKesekretariatan::create($validated);

        return redirect()->route('agenda_kesekretariatan.index')->with('success', 'Agenda berhasil ditambahkan!');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|in:Terlaksana,Tidak Terlaksana',
        ]);

        $agenda = AgendaKesekretariatan::findOrFail($id);
        $agenda->keterangan = $request->keterangan;
        $agenda->save();

        return redirect()->route('agenda_kesekretariatan.index')->with('success', 'Status agenda berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $agenda = AgendaKesekretariatan::findOrFail($id);
        $agenda->delete();

        return redirect()->route('agenda_kesekretariatan.index')->with('success', 'Agenda berhasil dihapus.');
    }

}
