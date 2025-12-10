@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/persuratan/approveProses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $proposal->id }}" hidden>
                        <div class="row">
                            <tbody>
                                <tr>
                                    <th  width="300px" class="mb-0" style="font-size: 20px">{{ $title }}</th>
                                    <th  width="1000px"></th>
                                </tr>   
                                <tr>
                                    <td>Asal Madrasah/Sekolah</td>
                                    <td>: {{ $proposal->kelas_id }}</td>
                                </tr>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="sk">File ACC</label>
                                    <input type="file" class="form-control" id="surat_acc" name="surat_acc"
                                        placeholder="Upload File Acc" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/proposal" type="button" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
