@extends('backend.layout.base')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0" style="font-size: 40px"><b>Tambah Program Kerja</b></h5>
        </div>
        <div class="container mt-4">
            <form action="{{ route('program_kerja.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_program">Program Kerja</label>
                    <input type="text" name="nama_program" id="nama_program" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_pelaksanaan">Tanggal Pelaksanaan</label>
                    <input type="date" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="anggaran">Anggaran</label>
                    <input type="number" name="anggaran" id="anggaran" class="form-control" required>
                </div>

                {{-- <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                </div> --}}

                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea name="catatan" id="catatan" class="form-control"></textarea>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('program_kerja.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
