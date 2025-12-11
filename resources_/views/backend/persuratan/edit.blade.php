@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/persuratan/editProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $persuratan->id }}" hidden>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Madrasah/Sekolah</label>
                                    <select class="form-control" id="kelas" disabled>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->id }}" {{ $k->id == $persuratan->kelas ? 'selected' : '' }}>
                                                {{ $k->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <!-- Hidden input untuk mengirim data ke server -->
                                    <input type="hidden" name="kelas" value="{{ $persuratan->kelas }}">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Jenis Surat</label>
                                    <input type="text" class="form-control" id="jenis" name="jenis"
                                        value="{{ $persuratan->jenis }}" placeholder="Masukan Jenis Surat" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="sk">File Balasan</label>
                                    <input type="file" class="form-control" id="surat_acc" name="surat_acc"
                                        placeholder="Upload File Acc">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="catatan">Masukan Catatan</label>
                                    <input type="text" class="form-control" id="catatan" name="catatan" placeholder="Tulis jenis surat..." required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/persuratan" type="button" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
