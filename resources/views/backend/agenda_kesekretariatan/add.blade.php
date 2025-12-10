@extends('backend.layout.base')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Tambah Agenda Kesekretariatan</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('agenda_kesekretariatan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kegiatan" class="form-label">Kegiatan</label>
                    <input type="text" class="form-control" name="kegiatan" id="kegiatan" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_pelaksanaan" class="form-label">Tanggal Pelaksanaan</label>
                    <input type="date" class="form-control" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" required>
                </div>
                <div class="mb-3">
                    <label for="petugas" class="form-label">Petugas</label>
                    <input type="text" class="form-control" name="petugas" id="petugas" required>
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" name="catatan" id="catatan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
