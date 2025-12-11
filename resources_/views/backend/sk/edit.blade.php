@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/sk/editProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="sekolah" value="{{ $sk->sekolah }}" hidden>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Madrasah/Sekolah</label>
                                    <select class="form-control" name="sekolah" id="sekolah" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $l)
                                            <option value="{{ $l->nama_kelas }}">{{ $l->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Tahun SK</label>
                                    <select class="form-control" name="tahun_sk" id="tahun_sk" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($tahun_ajaran as $l)
                                            <option value="{{ $l->tahun }}">{{ $l->tahun }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Bulan SK</label>
                                    <select class="form-control" name="bulan_sk" id="bulan_sk" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($bulan_sk as $l)
                                            <option value="{{ $l->bulan }}">{{ $l->bulan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="file">Upload SK</label>
                                    <input type="file" class="form-control" id="sk" name="sk"
                                        placeholder="Upload SK PDF" required />
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
