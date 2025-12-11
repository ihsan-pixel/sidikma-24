@extends('backend.layout.base')

@section('content')
    <div class="card p-4">
        <h4>Tambah Laporan Tahunan</h4>
        <form action="{{ route('laporan-tahunan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="tahun">Tahun Anggaran</label>
                <input type="text" name="tahun" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="file_program">File Laporan Program Kerja (PDF)</label>
                <input type="file" name="file_program" accept="application/pdf" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="file_keuangan">File Laporan Keuangan (PDF)</label>
                <input type="file" name="file_keuangan" accept="application/pdf" class="form-control" required>
            </div>
            <button class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
