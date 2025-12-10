@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="fw-bold">{{ $title }}</h3>
            <a href="/program_kerja/add" class="btn rounded-pill btn-primary" style="margin-left: 70%;">Add</a>
        </div>
        <div class="row mx-2 mt-3">
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Terlaksana</h5>
                        <p class="card-text">{{ $persentase['terlaksana'] }}%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Belum Terlaksana</h5>
                        <p class="card-text">{{ $persentase['belum'] }}%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Tidak Terlaksana</h5>
                        <p class="card-text">{{ $persentase['tidak'] }}%</p>
                    </div>
                </div>
            </div>
        </div>        
        <div class="container mt-4">
            <table id="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program Kerja</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Anggaran</th>
                        <th>Keterangan</th>
                        <th>Catatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($programs as $program)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $program->nama_program }}</td>
                            <td>{{ \Carbon\Carbon::parse($program->tanggal_pelaksanaan)->translatedFormat('j F Y') }}</td>
                            <td>Rp{{ number_format($program->anggaran, 0, ',', '.') }}</td>
                            <td>
                                @if($program->keterangan == 'belum terlaksana')
                                    <span style="color: red; font-weight: bold;">{{ strtoupper($program->keterangan) }}</span>
                                @else
                                    {{ $program->keterangan }}
                                @endif
                            </td>                                                        
                            <td>{{ $program->catatan }}</td>
                            <td>
                                <!-- Tombol Edit jadi buka modal -->
                                @if($program->keterangan !== 'Terlaksana' && $program->keterangan !== 'Tidak Terlaksana')
                                    <!-- Tombol Update hanya tampil jika belum Terlaksana/Tidak Terlaksana -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#statusModal{{ $program->id }}">Proses</button>
                                @endif
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $program->id }}">Delete</button>

                                <!-- Modal Update Status -->
                            <div class="modal fade" id="statusModal{{ $program->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="statusModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{ route('program_kerja.updateStatus', $program->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Status Program Kerja</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Pilih status keterangan untuk <strong>{{ $program->nama_program }}</strong></p>
                                                <select name="keterangan" class="form-control" required>
                                                    <option value="Terlaksana" {{ $program->keterangan == 'Terlaksana' ? 'selected' : '' }}>Terlaksana</option>
                                                    <option value="Tidak Terlaksana" {{ $program->keterangan == 'Tidak Terlaksana' ? 'selected' : '' }}>Tidak Terlaksana</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                                <!-- Modal Delete -->
                                <div class="modal fade" id="delete{{ $program->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus Program</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Yakin ingin menghapus program: <strong>{{ $program->nama_program }}</strong>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <a href="/program_kerja/delete/{{ $program->id }}" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
