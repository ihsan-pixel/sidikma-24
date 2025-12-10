@extends('backend.layout.base') {{-- Ganti dengan layout kamu kalau beda --}}

@section('content')
<div class="container">
    <h2>Upload dan Preview PDF</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('tools.pdf.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="pdf_file">Pilih file PDF dari komputer kamu:</label>
            <input type="file" name="pdf_file" id="pdf_file" class="form-control" accept="application/pdf" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Upload</button>
    </form>

    @if(request()->has('file'))
        <h4 class="mt-4">Preview file: {{ request()->file }}</h4>
        <iframe src="{{ url('storage/dokumen/proses_tandatangan/' . request()->file) }}" width="100%" height="600px"></iframe>
    @endif
</div>
@endsection
