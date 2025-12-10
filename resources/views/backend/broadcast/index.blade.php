@extends('backend.layout.base')

@section('content')
<div class="card table-responsive">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0" style="font-size: 30px"><b>{{ $title }}</b></h5>
        <a href="{{ route('broadcast.create') }}" class="btn btn-primary">Add</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Pesan</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse($broadcasts as $broadcast)
                    <tr>
                        <td>{{ $broadcast->title }}</td>
                        <td>{{ Str::limit($broadcast->message, 50) }}</td>
                        <td>
                            @if($broadcast->image_path)
                                <img src="{{ asset('storage/' . $broadcast->image_path) }}" alt="gambar" width="80">
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $broadcast->created_at->format('d M Y H:i') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="4">Belum ada broadcast</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
