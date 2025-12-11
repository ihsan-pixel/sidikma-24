@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>Agenda Kesekretariatan</b>
            </h5>
            <a href="{{ route('agenda_kesekretariatan.add') }}" class="btn rounded-pill btn-primary" style="margin-left: 70%;">Add</a>
        </div>
        <div class="container mt-4">
            <table id="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Petugas</th>
                        <th>Keterangan</th>
                        <th>Catatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($agenda as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->kegiatan }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_pelaksanaan)->translatedFormat('j F Y') }}</td>
                            <td>{{ $item->petugas }}</td>
                            <td>
                                @if($item->keterangan == 'Tidak Terlaksana')
                                    <span class="text-danger fw-bold">{{ strtoupper($item->keterangan) }}</span>
                                @else
                                    {{ $item->keterangan }}
                                @endif
                            </td>
                            <td>{{ $item->catatan }}</td>
                            <td>
                                <!-- Tombol Update Status -->
                                @if($item->keterangan !== 'Terlaksana' && $item->keterangan !== 'Tidak Terlaksana')
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#updateStatusModal{{ $item->id }}">Proses</button>
                                @endif

                                <!-- Tombol Delete -->
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                    Delete
                                </button>

                                <!-- Modal Update Status -->
                                <div class="modal fade" id="updateStatusModal{{ $item->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <form action="{{ route('agenda_kesekretariatan.updateStatus', $item->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Status Agenda</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Ubah status untuk: <strong>{{ $item->kegiatan }}</strong></p>
                                                    <select name="keterangan" class="form-control" required>
                                                        <option value="Terlaksana" {{ $item->keterangan == 'Terlaksana' ? 'selected' : '' }}>Terlaksana</option>
                                                        <option value="Tidak Terlaksana" {{ $item->keterangan == 'Tidak Terlaksana' ? 'selected' : '' }}>Tidak Terlaksana</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Modal Delete -->
                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <form action="{{ route('agenda_kesekretariatan.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin ingin menghapus agenda: <strong>{{ $item->kegiatan }}</strong>?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>                    
            </table>
        </div>
    </div>
@endsection
