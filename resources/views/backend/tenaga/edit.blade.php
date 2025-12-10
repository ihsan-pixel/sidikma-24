@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/tenaga/editProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $tenaga->id }}" hidden>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Madrasah/Sekolah</label>
                                    <select class="form-control" name="kelas_id" id="kelas_id" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->nama_kelas }}"
                                                {{ $k->nama_kelas == $tenaga->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Tahun Pelajaran</label>
                                    <input type="text" class="form-control" id="thn_pelajaran" name="thn_pelajaran" value="{{$tenaga->thn_pelajaran}}"
                                        placeholder="Masukan Tahun Ajaran" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml GTY Sertifikasi Inpassing</label>
                                    <input type="text" class="form-control" id="jml_gtysertifikasiinpassing" name="jml_gtysertifikasiinpassing" value="{{$tenaga->jml_gtysertifikasiinpassing}}"
                                        placeholder="Masukan Jumlah GTY Sertifikasi Inpassing" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml GTY Sertifikasi Non Inpassing</label>
                                    <input type="text" class="form-control" id="jml_gtysertifikasinoninpassing" name="jml_gtysertifikasinoninpassing" value="{{$tenaga->jml_gtysertifikasinoninpassing}}"
                                        placeholder="Masukan Jumlah GTY Sertifikasi Non Inpassing" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml GTY Non Sertifikasi</label>
                                    <input type="text" class="form-control" id="jml_gtynonsertifikasi" name="jml_gtynonsertifikasi" value="{{$tenaga->jml_gtynonsertifikasi}}"
                                        placeholder="Masukan Jumlah GTY Non Sertifikasi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml PTY</label>
                                    <input type="text" class="form-control" id="jml_pty" name="jml_pty" value="{{$tenaga->jml_pty}}"
                                        placeholder="Masukan Jumlah PTY" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml PNS</label>
                                    <input type="text" class="form-control" id="jml_pns" name="jml_pns" value="{{$tenaga->jml_pns}}"
                                        placeholder="Masukan Jumlah GTY" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Keseluruhan Pendidik dan Tenaga Kependidikan</label>
                                    <input type="text" class="form-control" id="jml_tenaga" name="jml_tenaga" value="{{$tenaga->jml_tenaga}}"
                                        placeholder="Masukan Jumlah Tenaga Keseluruhan" required />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/tenaga" type="button" class="btn btn-success">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
