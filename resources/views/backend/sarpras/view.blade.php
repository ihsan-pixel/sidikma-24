@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ request()->user()->nama_lengkap }}</b>
            </h5>
        @if (request()->user()->role == 1)
            <a href="/sarpras/add" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;">Add</a>
        @endif
        </div>
        <!-- role 1 -->
        @if (request()->user()->role == 1)
        <div class="container mt-4 ">
            <table id="datatable" class="table table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Madrasah/Sekolah</th>
                        <th>Status Akreditasi</th>
                        <th>Masa Akreditasi</th>
                        <th>Nama Kepala</th>
                        <th>Status Tanah</th>
                        <th>Luas Tanah</th>
                        <th>Kepemilikan Sertifikat</th>
                        <th>Atas Nama</th>
                        <th>PHBNU</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($sarpras as $t)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td width="auto">{{ $t->kelas_id }}</td>
                            <td width="auto">{{ $t->status_akreditasi }}</td>
                            <td width="auto">{{ $t->masa_akreditasi }}</td>
                            <td width="auto">{{ $t->nama_kepala }}</td>
                            <td width="auto">{{ $t->status_tanah }}</td>
                            <td width="auto">{{ $t->luas_tanah }}</td>
                            <td width="auto">{{ $t->kepemilikan_sertifikat }}</td>
                            <td width="auto">{{ $t->atas_nama }}</td>
                            <td width="auto">{{ $t->phbnu }}</td>
                            <td>
                                <a href="/sarpras/edit/{{ $t->id }}" type="button" class="btn btn-success">Edit</a>
                                {{--<button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $t->id }}">Delete</button>--}}
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
                                                <p>Anda yakin ingin menghapus Data Sarpras {{ $t->kelas_id }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('/sarpras/delete', $t->id) }} "
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
        @endif
        <!--/ role 1 -->
        
        <!-- role 3 -->
        @if (request()->user()->role == 3)
        <div class="container mt-4 ">
            <table id="datatable" class="table table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Status Akreditasi</th>
                        <th>Masa Akreditasi</th>
                        <th>Status Tanah</th>
                        <th>Luas Tanah</th>
                        <th>Kepemilikan Sertifikat</th>
                        <th>Atas Nama</th>
                        <th>PHBNU</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($sarpras1 as $t)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td width="auto">{{ $t->akreditasi }}</td>
                            <td width="auto">{{ $t->masaakreditasi }}</td>
                            <td width="auto">{{ $t->statustanah }}</td>
                            <td width="auto">{{ $t->luastanah }}</td>
                            <td width="auto">{{ $t->sertifikat }}</td>
                            <td width="auto">{{ $t->atasnama }}</td>
                            <td width="auto">{{ $t->phbnu }}</td>
                            {{--<td>
                                <a href="/sarpras/edit/{{ $t->id }}" type="button" class="btn btn-success">Edit</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $t->id }}">Delete</button>
                            </td>--}}
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
                                                <p>Anda yakin ingin menghapus Data Sarpras {{ $t->kelas_id }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('/sarpras/delete', $t->id) }} "
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
        @endif
        <!--/ role 3 -->
    </div>
@endsection
