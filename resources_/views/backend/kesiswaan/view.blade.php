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
            <a href="/kesiswaan/add" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;">Add</a>
            @endif
        </div>
        @if (request()->user()->role == 1)
        <div class="container mt-4 ">
            <table id="datatable" class="table table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Madrasah/Sekolah</th>
                        <th>Tahun Pelajaran</th>
                        <th>Kelas 1</th>
                        <th>Kelas 2</th>
                        <th>Kelas 3</th>
                        <th>Kelas 4</th>
                        <th>Kelas 5</th>
                        <th>Kelas 6</th>
                        <th>Kelas 7</th>
                        <th>Kelas 8</th>
                        <th>Kelas 9</th>
                        <th>Jumlah Siswa</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kesiswaan as $t)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td width="auto">{{ $t->kelas_id }}</td>
                            <td width="auto">{{ $t->thn_pelajaran }}</td>
                            <td width="auto">{{ $t->kelas1 }}</td>
                            <td width="auto">{{ $t->kelas2 }}</td>
                            <td width="auto">{{ $t->kelas3 }}</td>
                            <td width="auto">{{ $t->kelas4 }}</td>
                            <td width="auto">{{ $t->kelas5 }}</td>
                            <td width="auto">{{ $t->kelas6 }}</td>
                            <td width="auto">{{ $t->kelas7 }}</td>
                            <td width="auto">{{ $t->kelas8 }}</td>
                            <td width="auto">{{ $t->kelas9 }}</td>
                            <td width="auto">{{ $t->jumlah_siswa }}</td>
                            <td>
                                <a href="/kesiswaan/edit/{{ $t->id }}" type="button" class="btn btn-success">Edit</a>
                                {{--<button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $t->id }}">Delete</button>--}}
                            </td>
                            <div class="modal fade" id="delete{{ $t->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deletemodal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addNewDonaturLabel">Hapus Data Jumlah Siswa
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda yakin ingin menghapus data siswa {{ $t->kelas_id }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('/kesiswaan/delete', $t->id) }} "
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
        
        <!-- role 3 -->
        @if (request()->user()->role == 3)
        <div class="container mt-4 ">
            <table id="datatable" class="table table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun Pelajaran</th>
                        <th>Kelas 1</th>
                        <th>Kelas 2</th>
                        <th>Kelas 3</th>
                        <th>Kelas 4</th>
                        <th>Kelas 5</th>
                        <th>Kelas 6</th>
                        <th>Kelas 7</th>
                        <th>Kelas 8</th>
                        <th>Kelas 9</th>
                        <th>Jumlah Siswa</th>
                        {{--<th>Actions</th>--}}
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($jumlahsiswa as $t)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td width="auto">{{ $t->thn_pelajaran }}</td>
                            <td width="auto">{{ $t->kelas1 }}</td>
                            <td width="auto">{{ $t->kelas2 }}</td>
                            <td width="auto">{{ $t->kelas3 }}</td>
                            <td width="auto">{{ $t->kelas4 }}</td>
                            <td width="auto">{{ $t->kelas5 }}</td>
                            <td width="auto">{{ $t->kelas6 }}</td>
                            <td width="auto">{{ $t->kelas7 }}</td>
                            <td width="auto">{{ $t->kelas8 }}</td>
                            <td width="auto">{{ $t->kelas9 }}</td>
                            <td width="auto">{{ $t->jumlahsiswa }}</td>
                            {{--<td>
                                <a href="/siswa/edit/{{ $t->id }}" type="button" class="btn btn-success">Edit</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $t->id }}">Delete</button>
                            </td>--}}
                            <div class="modal fade" id="delete{{ $t->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deletemodal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addNewDonaturLabel">Hapus Data Jumlah Siswa
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda yakin ingin menghapus data siswa {{ $t->kelas_id }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('/kesiswaan/delete', $t->id) }} "
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

