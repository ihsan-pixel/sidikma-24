@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            <a href="/kelas/add" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;">Add</a>
        </div>
        <div class="container mt-4 ">
            <table id="datatable" class="table table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Madrasah/Sekolah</th>
                        <th>Jml Siswa Kelas 1</th>
                        <th>Jml Siswa Kelas 2</th>
                        <th>Jml Siswa Kelas 3</th>
                        <th>Jml Siswa Kelas 4</th>
                        <th>Jml Siswa Kelas 5</th>
                        <th>Jml Siswa Kelas 6</th>
                        <th>Jml Siswa Kelas 7</th>
                        <th>Jml Siswa Kelas 8</th>
                        <th>Jml Siswa Kelas 9</th>
                        <th>Total Siswa</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($alumni as $a)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td width="auto">
                                @if ($a->image != null)
                                    <img src="{{ asset('') }}storage/images/users/{{ $a->image }}"
                                        style="width: 40px; height: 40px;border-radius: 50%" alt="Gambar Kosong">
                                @else
                                    <img src="{{ asset('') }}storage/images/users/users.png"
                                        style="width: 40px; height: 40px;border-radius: 50%" alt="Gambar Kosong">
                                @endif
                            </td>
                            <td width="auto">{{ $a->nis }}</td>
                            <td width="auto">{{ $a->nama_lengkap }}</td>
                            <td width="auto">{{ $a->email }}</td>
                            <td width="auto">{{ $a->nama_kelas }}</td>
                            <td width="auto">{{ $a->nama_jurusan }}</td>
                            <td width="auto">
                                <button class="btn btn-info">{{ $a->status }}</button>
                            </td>
                            <td><a href="/siswa/tunggakan/{{ $a->id }}" type="button"
                                    class="btn btn-success">Tunggakan</a>
                                <a href="/pembayaran/search?&kelas_id={{ $a->kelas_id }}&nis={{ $a->nis }}"
                                    type="button" class="btn btn-danger">Pembayaran</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
