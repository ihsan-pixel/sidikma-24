@extends('layouts.base') {{-- Atau layout lain sesuai struktur kamu --}}

@section('content')
<div class="container">
    <h2>PDF Viewer</h2>

    <form method="GET" action="{{ route('tools.pdf.viewer') }}">
        <div class="form-group">
            <label for="file">Pilih File PDF:</label>
            <select name="file" id="file" class="form-control" onchange="this.form.submit()">
                <option value="">-- Pilih PDF --</option>
                @foreach($pdfList as $pdf)
                    <option value="{{ $pdf['name'] }}" {{ $selectedPdf === $pdf['name'] ? 'selected' : '' }}>
                        {{ $pdf['name'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>

    @if($selectedPdf)
        <div class="mt-4">
            <h4>Preview: {{ $selectedPdf }}</h4>
            <iframe src="{{ asset('pdfs/' . $selectedPdf) }}" width="100%" height="600px"></iframe>
        </div>
    @endif
</div>
@endsection
