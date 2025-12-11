@extends('backend.layout.base')

@section('content')
<div class="card">
    <div class="card-header"><h4>Tambah Laporan Tahunan</h4></div>
    <div class="card-body">
        <form action="{{ route('laporan_tahunan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Tahun Anggaran</label>
                <input type="text" name="tahun_anggaran" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>File Laporan Program Kerja (PDF)</label>
                <input type="file" name="laporan_program_kerja" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>File Laporan Keuangan (PDF)</label>
                <input type="file" name="laporan_keuangan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
