@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                     <img src="{{ asset('') }}storage/images/users/{{ $admin->image }}" style="width: 100px; height: 100px;border-radius: 10%; margin-right: 4%;" alt="Gambar Kosong">
                </div>
                <div class="card-body">
                    <form action="/admin/editProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $admin->id }}" hidden>
                        <!--<div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        value="{{ $admin->nama_lengkap }}" placeholder="Masukan Nama Lengkap" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $admin->email }}" placeholder="Masukan Email" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="no_tlp">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="no_tlp" name="no_tlp"
                                        value="{{ $admin->no_tlp }}" placeholder="Masukan Nomor Telepon" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                        value="{{ $admin->tgl_lahir }}" placeholder="Masukan Tanggal Lahir" required />
                                </div>
                            </div>


                         
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="role">Role</label>
                                    <select class="form-control" name="role" id="role" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($role as $r)
                                            <option value="{{ $r }}" {{ $r == $admin->role ? 'selected' : '' }}>
                                                @if ($r == 1)
                                                    Admin
                                                @else
                                                    Pengurus LP. Ma'arif NU
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($status as $s)
                                            <option value="{{ $s }}" {{ $s == $admin->status ? 'selected' : '' }}>
                                                {{ $s }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        value="{{ $admin->image }}" placeholder="Masukan Gambar" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        value="{{ $admin->alamat }}" placeholder="Masukan Alamat" required />
                                </div>
                            </div>-->
                            
                            <!-- role 3 -->
                            @if (request()->user()->role != 2)
                            <!-- header -->
                            <a href="" class="d-block bg-info border border-info card-header py-3"
                                data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="collapseCardExample">
                                <h5 class="m-0 font-weight-bold text-white">Data Madrasah/Sekolah</h5>
                            </a>
                            <!--/ header -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="nis">NPSN</label>
                                        <input type="text" class="form-control" id="nis" name="nis"
                                            value="{{ $siswa->nis }}" placeholder="Masukan NPSN"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama_lengkap">Nama Madrasah/Sekolah</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                            value="{{ $siswa->nama_lengkap }}" placeholder="Masukan Nama Madrasah/Sekolah"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="kelas_id">Pilih Kembali Asal Madrasah/Sekolah</label>
                                    <select class="form-control" name="kelas_id" id="kelas_id" >
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->id }}"
                                                {{ $k->id == $siswa->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email Madrasah/Sekolah</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $siswa->email }}" placeholder="Masukan Email"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="no_tlp">Nomor Telepon Madrasah/Sekolah</label>
                                        <input type="text" class="form-control" id="no_tlp" name="no_tlp"
                                            value="{{ $siswa->no_tlp }}" placeholder="Masukan Nomor Telepon"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password Baru Aplikasi (Bukan Password Email)</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Masukan Password" required />
                                    </div>
                                </div>
                                @if (request()->user()->role != 2)
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="role">Role</label>
                                        <select class="form-control" name="role" id="role" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="3">Akun Madrasah/Sekolah</option>
                                        </select>
                                    </div>
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="image">Foto Madrasah/Sekolah (Landscape)</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            value="{{ $admin->image }}" placeholder="Masukan Gambar" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="status">Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($status as $s)
                                                <option value="{{ $s }}" {{ $s == $admin->status ? 'selected' : '' }}>
                                                    {{ $s }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="alamat">Alamat Madrasah/Sekolah</label>
                                        <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" >{{ $siswa->alamat }} </textarea>
                                    </div>
                                </div>

                            </div>

                            <!-- header -->
                            <a href="" class="d-block bg-info border border-info card-header py-3"
                                data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="collapseCardExample">
                                <h5 class="m-0 font-weight-bold text-white">Data Kesiswaan Madrasah/Sekolah</h5>
                            </a>
                            <!--/ header -->
                            <div class="row">
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
                                        <input type="text" class="form-control" id="kelas1" name="kelas1" value="{{$siswa->kelas1}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 1" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 2</label>
                                        <input type="text" class="form-control" id="kelas2" name="kelas2" value="{{$siswa->kelas2}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 2" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 3</label>
                                        <input type="text" class="form-control" id="kelas3" name="kelas3" value="{{$siswa->kelas3}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 3" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 4</label>
                                        <input type="text" class="form-control" id="kelas4" name="kelas4" value="{{$siswa->kelas4}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 4" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 5</label>
                                        <input type="text" class="form-control" id="kelas5" name="kelas5" value="{{$siswa->kelas5}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 5" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 6</label>
                                        <input type="text" class="form-control" id="kelas6" name="kelas6" value="{{$siswa->kelas6}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 6" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 7</label>
                                        <input type="text" class="form-control" id="kelas7" name="kelas7" value="{{$siswa->kelas7}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 7" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 8</label>
                                        <input type="text" class="form-control" id="kelas8" name="kelas8" value="{{$siswa->kelas8}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 8" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Kelas 9</label>
                                        <input type="text" class="form-control" id="kelas9" name="kelas9" value="{{$siswa->kelas9}}"
                                            placeholder="Masukan Jumlah Siswa Kelas 9" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Jml Siswa Keseluruhan</label>
                                        <input type="text" class="form-control" id="jumlahsiswa" name="jumlahsiswa" value="{{$siswa->jumlahsiswa}}"
                                            placeholder="Masukan Jumlah keseluruhan" required />
                                    </div>
                                </div>
                            </div>
                            <!-- header -->
                            <a href="" class="d-block bg-info border border-info card-header py-3"
                                data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="collapseCardExample">
                                <h5 class="m-0 font-weight-bold text-white">Data Sarpras Madrasah/Sekolah</h5>
                            </a>
                            <!--/ header -->
                            <div class="row">
                                <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Status Akreditasi</label>
                                    <input type="text" class="form-control" id="akreditasi" name="akreditasi" value="{{$siswa->akreditasi}}"
                                        placeholder="Masukan Statsu Akreditasi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Masa Akreditasi</label>
                                    <input type="text" class="form-control" id="masaakreditasi" name="masaakreditasi" value="{{$siswa->masaakreditasi}}"
                                        placeholder="Masukan Masa Akreditasi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Status Tanah</label> 
                                    <input type="text" class="form-control" id="statustanah" name="statustanah" value="{{$siswa->statustanah}}"
                                        placeholder="Masukan Status Tanah" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Luas Tanah</label>
                                    <input type="text" class="form-control" id="luastanah" name="luastanah" value="{{$siswa->luastanah}}"
                                        placeholder="Masukan Luas Tanah" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Kepemilikan Sertifikat</label>
                                    <select class="form-control" name="sertifikat" id="sertifikat" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($k_sertifikat as $k)
                                            <option value="{{ $k->keterangan }}"
                                            {{ $k->keterangan == $siswa->sertifikat ? 'selected' : '' }}>
                                                {{ $k->keterangan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Atas Nama</label>
                                    <input type="text" class="form-control" id="atasnama" name="atasnama" value="{{$siswa->atasnama}}"
                                        placeholder="Masukan Atas Nama" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name"> Kepemilikan PHBNU</label>
                                    <select class="form-control" name="phbnu" id="phbnu" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($phbnu as $p)
                                            <option value="{{ $p->keterangan }}"
                                            {{ $p->keterangan == $siswa->phbnu ? 'selected' : '' }}>
                                            {{ $p->keterangan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            </div>
                            @endif
                            <!--/ role 3 -->

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-success">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
