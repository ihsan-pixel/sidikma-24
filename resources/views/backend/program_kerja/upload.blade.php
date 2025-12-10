@extends('backend.layout.base')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0" style="font-size: 30px">
                <b>Upload Program Kerja</b>
            </h5>
        </div>
        <div class="card-body">
            <form action="{{ url('/program-kerja/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File Program Kerja (PDF, DOCX, dll)</label>
                    <input class="form-control" type="file" id="file" name="file" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
                <a href="{{ url('/program-kerja') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
