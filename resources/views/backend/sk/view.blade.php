@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            @if (request()->user()->role == 1)
            <a href="/sk/add" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;">Add</a>
            @endif
        </div>
        <div class="container mt-4 ">
            <table id="datatable" class="table table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Madrasah/Sekolah</th>
                        <th>Tahun SK</th>
                        <th>Bulan SK</th>
                        <th>SK</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($sk as $t)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td width="auto">{{ $t->sekolah }}</td>
                            <td width="auto">{{ $t->tahun_sk }}</td>
                            <td width="auto">{{ $t->bulan_sk }}</td>
                            <td width="auto">{{ $t->sk }}</td>
                            <td>
                                <a href="/sk/edit/{{ $t->id }}" type="button" class="btn btn-success">Edit</a>
                                <a href="{{ route('file.download', ['filename' => 'contohfile.pdf']) }}" class="btn btn-primary">Download File</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $t->id }}">Delete</button>
                            </td>
                            <div class="modal fade" id="delete{{ $t->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deletemodal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addNewDonaturLabel">Hapus Data Sarpras
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda yakin ingin menghapus Data SK {{ $t->sk }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('/sk/delete', $t->id) }} "
                                                    class="btn btn-primary">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
