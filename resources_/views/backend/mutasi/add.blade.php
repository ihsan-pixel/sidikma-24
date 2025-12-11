@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/mutasi/proses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">ewanugk</label>
                                    <input type="text" class="form-control" id="ewanu" name="ewanu"
                                        placeholder="Masukan Nomor ewanugk" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukan Nama" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">nomor telepon</label>
                                    <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                        placeholder="Masukan Nomor Telepon" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        placeholder="Masukan Tempat Lahir" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        placeholder="Masukan Nomor Tanggal Lahir" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jenis Mutasi</label>
                                    <select class="form-control" name="jenis_mutasi" id="jenis_mutasi" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($jenis_mutasi as $l)
                                            <option value="{{ $l->jenis }}">{{ $l->jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">tmt mutasi</label>
                                    <input type="date" class="form-control" id="tmt_pindah" name="tmt_pindah"
                                        placeholder="Masukan TMT Pindah" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Sekolah Asal</label>
                                    <input type="text" class="form-control" id="skl_asal" name="skl_asal"
                                        placeholder="Masukan Nama Sekolah/Marasah Asal" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Sekolah Tujuan</label>
                                    <input type="text" class="form-control" id="skl_tujuan" name="skl_tujuan"
                                        placeholder="Masukan Nama Sekolah/Marasah Asal" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Upload Surat Permohonan Mutasi (PDF)</label>
                                    <input type="file" class="form-control" id="mutasi" name="mutasi"
                                        placeholder="Upload Surat Permohonan Mutasi" required />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/mutasi" type="button" class="btn btn-success">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
