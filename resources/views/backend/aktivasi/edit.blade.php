@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/aktivasi/editProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $aktivasi->id }}" hidden>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Lengkap (Kapital)</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ $aktivasi->nama }}" placeholder="Masukan Nama Lengkap" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Asal Madrasah/Sekolah</label>
                                    <select class="form-control" name="kelas" id="kelas" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->nama_kelas }}"
                                                {{ $k->nama_kelas == $aktivasi->kelas ? 'selected' : '' }}>{{ $k->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">TMT Non Aktif</label>
                                    <input type="text" class="form-control" id="tmt_nonaktif" name="tmt_nonaktif"
                                        value="{{ $aktivasi->tmt_nonaktif }}" placeholder="Masukan TMT Non Aktif" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/aktivasi" type="button" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
