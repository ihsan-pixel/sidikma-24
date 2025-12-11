<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKerja;

class ProgramKerjaController extends Controller
{
    public function index()
    {
        $programs = ProgramKerja::all();
        $total = $programs->count();

        $terlaksana = $programs->where('keterangan', 'Terlaksana')->count();
        $belum = $programs->where('keterangan', 'Belum Terlaksana')->count();
        $tidak = $programs->where('keterangan', 'Tidak Terlaksana')->count();

        $persen = function ($count) use ($total) {
            return $total > 0 ? round(($count / $total) * 100, 1) : 0;
        };

        $data = [
            'title' => 'PROGRAM KERJA',
            'programs' => $programs,
            'persentase' => [
                'terlaksana' => $persen($terlaksana),
                'belum' => $persen($belum),
                'tidak' => $persen($tidak),
            ]
        ];

        return view('backend.program_kerja.view', $data);
    }

    public function create()
    {
        return view('backend.program_kerja.add');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_program' => 'required|string|max:255',
            'tanggal_pelaksanaan' => 'required|date',
            'anggaran' => 'required|numeric',
            'keterangan' => 'nullable|string',
            'catatan' => 'nullable|string',
        ]);

        // Jika keterangan tidak diisi, set default "belum terlaksana"
        if (empty($validated['keterangan'])) {
            $validated['keterangan'] = 'Belum Terlaksana';
        }

        // Simpan data program kerja
        ProgramKerja::create($validated);

        // Redirect ke halaman program kerja dengan pesan sukses
        return redirect()->route('program_kerja.index')->with('success', 'Program Kerja berhasil ditambahkan!');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|in:Terlaksana,Tidak Terlaksana',
        ]);

        $program = ProgramKerja::findOrFail($id);
        $program->keterangan = $request->keterangan;
        $program->save();

        return redirect()->route('program_kerja.index')->with('success', 'Status keterangan berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $program = ProgramKerja::findOrFail($id);
        $program->delete();

        return redirect()->route('program_kerja.index')->with('success', 'Program Kerja berhasil dihapus.');
    }



    // Tambahan function create/edit/delete bisa ditambahkan nanti sesuai kebutuhan
}
