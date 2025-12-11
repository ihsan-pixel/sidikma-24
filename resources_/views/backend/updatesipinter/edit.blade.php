@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/updatesipinter/editProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $updatesipinter->id }}" hidden>
                        <div class="row">                           
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Surat Permohonan</label>
                                    <input type="text" class="form-control" id="jenis" name="jenis"
                                        value="{{ $updatesipinter->updatesipinter }}" placeholder="Masukan Jenis Surat" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="pcnu">File Surat Keterangan Aset</label>
                                    <input type="file" class="form-control" id="pcnu" name="pcnu"
                                        placeholder="Upload File PCNU" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="pwnu">File Surat Rekomendasi</label>
                                    <input type="file" class="form-control" id="pwnu" name="pwnu"
                                        placeholder="Upload File PWNU" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/updatesipinter" type="button" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
