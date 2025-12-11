@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/kesiswaan/editProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $jumlahsiswa->id }}" hidden>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Madrasah/Sekolah</label>
                                    <select class="form-control" name="kelas_id" id="kelas_id" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->nama_kelas }}"
                                                {{ $k->nama_kelas == $kesiswaan->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Tahun Pelajaran</label>
                                    <input type="text" class="form-control" id="thn_pelajaran" name="thn_pelajaran" value="2024-2025"
                                        placeholder="Masukan Tahun Pelajaran" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 1</label>
                                    <input type="text" class="form-control" id="kelas1" name="kelas1" value="{{$kesiswaan->kelas1}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 1" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 2</label>
                                    <input type="text" class="form-control" id="kelas2" name="kelas2" value="{{$kesiswaan->kelas2}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 2" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 3</label>
                                    <input type="text" class="form-control" id="kelas3" name="kelas3" value="{{$kesiswaan->kelas3}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 3" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 4</label>
                                    <input type="text" class="form-control" id="kelas4" name="kelas4" value="{{$kesiswaan->kelas4}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 4" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 5</label>
                                    <input type="text" class="form-control" id="kelas5" name="kelas5" value="{{$kesiswaan->kelas5}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 5" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 6</label>
                                    <input type="text" class="form-control" id="kelas6" name="kelas6" value="{{$kesiswaan->kelas6}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 6" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 7</label>
                                    <input type="text" class="form-control" id="kelas7" name="kelas7" value="{{$kesiswaan->kelas7}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 7" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 8</label>
                                    <input type="text" class="form-control" id="kelas8" name="kelas8" value="{{$kesiswaan->kelas8}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 8" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Kelas 9</label>
                                    <input type="text" class="form-control" id="kelas9" name="kelas9" value="{{$kesiswaan->kelas9}}"
                                        placeholder="Masukan Jumlah Siswa Kelas 9" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jml Siswa Keseluruhan</label>
                                    <input type="text" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="{{$kesiswaan->jumlah_siswa}}"
                                        placeholder="Masukan Jumlah keseluruhan" required />
                                </div>
                            </div>
                            

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/kesiswaan" type="button" class="btn btn-success">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
