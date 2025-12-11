@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/sarpras/proses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Madrasah/Sekolah</label>
                                    <select class="form-control" name="kelas_id" id="kelas_id" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $l)
                                            <option value="{{ $l->nama_kelas }}">{{ $l->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Status Akreditasi</label>
                                    <input type="text" class="form-control" id="status_akreditasi" name="status_akreditasi"
                                        placeholder="Masukan Statsu Akreditasi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Masa Akreditasi</label>
                                    <input type="text" class="form-control" id="masa_akreditasi" name="masa_akreditasi"
                                        placeholder="Masukan Masa Akreditasi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Kepala Madrasah</label>
                                    <input type="text" class="form-control" id="nama_kepala" name="nama_kepala"
                                        placeholder="Masukan Nama Kepala" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Status Tanah</label>
                                    <input type="text" class="form-control" id="status_tanah" name="status_tanah"
                                        placeholder="Masukan Status Tanah" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Luas Tanah</label>
                                    <input type="text" class="form-control" id="luas_tanah" name="luas_tanah"
                                        placeholder="Masukan Luas Tanah" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Kepemilikan Sertifikat</label>
                                    <select class="form-control" name="kepemilikan_sertifikat" id="kepemilikan_sertifikat" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($k_sertifikat as $k)
                                            <option value="{{ $k->keterangan }}">{{ $k->keterangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Atas Nama</label>
                                    <input type="text" class="form-control" id="atas_nama" name="atas_nama"
                                        placeholder="Masukan Atas Nama" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Kepemilikan PHBNU</label>
                                    <select class="form-control" name="phbnu" id="phbnu" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($phbnu as $p)
                                            <option value="{{ $p->keterangan }}">{{ $p->keterangan }}</option>
                                        @endforeach
                                    </select>
                                    {{--<input type="text" class="form-control" id="phbnu" name="phbnu"
                                        placeholder="Masukan PHBNU" required />--}}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/sarpras" type="button" class="btn btn-success">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
