@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/aktivasi/proses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Lengkap dan Gelar</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukan Nama Lengkap" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Asal Madrasah/Sekolah</label>
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
                                    <label class="form-label" for="full_name">TMT Tidak Aktif</label>
                                    <input type="date" class="form-control" name="tmt_nonaktif" id="tmt_nonaktif" placeholder="Masukan TMT Tidak Aktif">  
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Upload Surat Permohonan (PDF)</label>
                                    <input type="file" class="form-control" id="s_permohonan" name="s_permohonan"
                                        placeholder="Upload Surat Permohonan" required />
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