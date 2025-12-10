@extends('backend.layout.base')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Laporan Tahunan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('laporan_tahunan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun Anggaran</label>
                    <input type="number" name="tahun" id="tahun" class="form-control" required placeholder="Contoh: 2025">
                </div>

                <div class="mb-3">
                    <label for="file_program" class="form-label">Upload Laporan Program Kerja (PDF)</label>
                    <input type="file" name="file_program" id="file_program" class="form-control" accept="application/pdf" required>
                </div>

                <div class="mb-3">
                    <label for="file_keuangan" class="form-label">Upload Laporan Keuangan (PDF)</label>
                    <input type="file" name="file_keuangan" id="file_keuangan" class="form-control" accept="application/pdf" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('laporan_tahunan.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
