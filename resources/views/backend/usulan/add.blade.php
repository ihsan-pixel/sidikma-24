@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/usulan/proses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">ewanugk</label>
                                    <input type="text" class="form-control" id="ewanugk" name="ewanugk"
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
                                    <label class="form-label" for="full_name">email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Masukan Email" required />
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
                                    <label class="form-label" for="full_name">Nama Madrasah/Sekolah</label>
                                    <select class="form-control" name="kelas" id="kelas" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $l)
                                            <option value="{{ $l->id }}">{{ $l->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Status Kepegawaian</label>
                                    <select class="form-control" name="status_kepegawaian" id="status_kepegawaian" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($jurusan as $l)
                                            <option value="{{ $l->id }}">{{ $l->nama_jurusan }}</option>
                                        @endforeach
                                    </select>
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
                                    <label class="form-label" for="full_name">tmt pertama</label>
                                    <input type="date" class="form-control" id="tmt_pertama" name="tmt_pertama"
                                        placeholder="Masukan Nomor TMT Pertama" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">ketugasan</label>
                                    <select class="form-control" name="ketugasan" id="ketugasan" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($ketugasan as $l)
                                            <option value="{{ $l->id }}">{{ $l->ketugasan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">nomor mitra admin</label>
                                    <input type="text" class="form-control" id="no_mitra" name="no_mitra"
                                        placeholder="Masukan Nomor Mitra Admin" required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">NUPTK (Jika Memiliki)</label>
                                    <input type="text" class="form-control" id="nuptk" name="nuptk"
                                        placeholder="Masukan Nomor NUPTK" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Pendidikan Terakhir, Tahun Lulus</label>
                                    <input type="text" class="form-control" id="ptt_lulus" name="ptt_lulus"
                                        placeholder="Contoh S1,2025" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Program Studi</label>
                                    <input type="text" class="form-control" id="p_studi" name="p_studi"
                                        placeholder="Masukan Program Studi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">foto resmi</label>
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        placeholder="Masukan Foto Resmi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">ijazah terakhir (PDF)</label>
                                    <input type="file" class="form-control" id="ijazah" name="ijazah"
                                        placeholder="Upload ijazah" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">surat permohonan (PDF)</label>
                                    <input type="file" class="form-control" id="permohonan" name="permohonan"
                                        placeholder="Upload surat permohonan" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">surat pernyataan siap berhidmad (PDF)</label>
                                    <input type="file" class="form-control" id="pernyataan" name="pernyataan"
                                        placeholder="Upload surat pernyataan" required />
                                </div>
                            </div>
                            

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/usulan" type="button" class="btn btn-success">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
