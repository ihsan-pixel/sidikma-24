@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>LAPORAN TAHUNAN</b>
            </h5>
            <a href="{{ route('laporan_tahunan.create') }}" class="btn rounded-pill btn-primary" style="margin-left: 70%;">Add</a>
        </div>

        <div class="container mt-4">
            <table id="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun Anggaran</th>
                        <th>Laporan Program Kerja</th>
                        <th>Laporan Keuangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($laporans as $laporan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $laporan->tahun }}</td>
                            <td><a href="{{ asset('public_html/' . $laporan->file_program) }}" target="_blank">Download</a></td>
                            <td><a href="{{ asset('public_html/' . $laporan->file_keuangan) }}" target="_blank">Download</a></td>
                            <td>
                                <form action="{{ route('laporan_tahunan.destroy', $laporan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
