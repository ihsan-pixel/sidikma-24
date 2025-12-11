@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            @if (request()->user()->role == 1)
            <a href="/siswaAdd" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;"><i class="fa-solid fa-plus"></i> Add</a>
            @endif
            @if (request()->user()->role == 2)
            <a href="/profile" type="button" class="btn rounded-pill btn-danger justify-content-end"
                style="margin-left: 70%;">Kembali</a>
            @endif
            @if (request()->user()->role == 3)
            <a href="/tenaga" type="button" class="btn rounded-pill btn-danger justify-content-end"
                style="margin-left: 70%;">Kembali</a>
            @endif
        </div>
    @if (request()->user()->role == 1)  
        <div class="container mt-4 ">
            <table id="datatable" class="table table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th width="30px">Image</th>
                        <th>Nama Lengkap</th>
                        <th>EWANUGK</th>
                        <th>Asal Madrasah</th>
                        <th>Status Kepegawaian</th>
                        <th>Periode SK</th>
                        {{-- <th>Status</th> --}}
                        <th width="200px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($siswa as $a)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td width="auto">
                                @if ($a->image != null)
                                    <img src="{{ asset('') }}storage/images/users/{{ $a->image }}"
                                        style="width: 40px; height: 50px;border-radius: 50%" alt="Gambar Kosong">
                                @else
                                    <img src="{{ asset('') }}storage/images/users/users.png"
                                        style="width: 40px; height: 40px;border-radius: 50%" alt="Gambar Kosong">
                                @endif
                            </td>
                            <td width="auto">{{ $a->nama_lengkap }}</td>
                            <td width="auto">{{ $a->nis }}</td>
                            <td width="auto">{{ $a->nama_kelas }}</td>
                            <td width="auto">{{ $a->nama_jurusan }}</td>
                            <td width="auto">
                                @if ($a->periode == 1)
                                    Januari
                                @elseif ($a->periode == 2)
                                    Juli
                                @elseif ($a->periode == 3)
                                    Kepala Madrasah/Sekolah
                                @elseif ($a->periode == null)
                                    Belum Valid
                                @endif
                            </td>
                            
                            {{-- <td width="auto">
                                <label class="switch switch-primary">
                                    @if ($a->status == 'ON')
                                        <input type="checkbox" readonly
                                            class="switch-input" checked />
                                    @else
                                        <input type="checkbox" readonly
                                            class="switch-input" />
                                    @endif

                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </span>

                                </label>
                            </td> --}}
                            
                            <td>
                            @if (request()->user()->role == 1)
                                <a href="/siswa/edit/{{ $a->id }}" type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="/siswa/open/{{ $a->id }}" type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $a->id }}"><i class="fa-solid fa-eraser"></i></button>
                            @endif
                            </td>
                            <div class="modal fade" id="delete{{ $a->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deletemodal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addNewDonaturLabel">Hapus Guru/Pegawai
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda yakin ingin menghapus {{ $a->nama_lengkap }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('/siswa/delete', $a->id) }} "
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
    </div>
@endsection
