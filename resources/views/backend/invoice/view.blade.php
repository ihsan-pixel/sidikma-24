@extends('backend.layout.base')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card shadow-sm">
            {{-- HEADER --}}
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-0 fw-bold">{{ $title }}</h4>
                        <small class="text-white-50">LP. Ma'arif NU PCNU Gunungkidul</small>
                    </div>
                    <div class="text-end">
                        <span class="badge bg-light text-primary fs-6">
                            Tahun Pelajaran {{ $tahunTerpilih ?? '2024/2025' }}
                        </span>
                    </div>
                </div>
            </div>

            {{-- FILTER --}}
            <div class="card-body border-bottom bg-light">
                <form method="GET" action="{{ route('invoice') }}" class="row g-3">
                    <div class="col-md-4">
                        <label for="tahun_ajaran" class="form-label fw-semibold">Tahun Ajaran</label>
                        <select name="tahun_ajaran" id="tahun_ajaran" class="form-select">
                            <option value="">Semua Tahun Ajaran</option>
                            @foreach($listTahunAjaran ?? [] as $tahun)
                                <option value="{{ $tahun }}" {{ $tahunTerpilih == $tahun ? 'selected' : '' }}>
                                    {{ $tahun }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-filter me-2"></i>Filter
                        </button>
                    </div>
                </form>
            </div>

            {{-- TABLE --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-hover">
                        <thead class="table-primary">
                            <tr class="text-center">
                                <th width="50">No</th>
                                <th>Asal Madrasah/Sekolah</th>
                                <th width="150">Kelas</th>
                                <th width="150">Jurusan</th>
                                <th width="200" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($datasekolah as $rp)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td class="fw-semibold">{{ $rp->nama_lengkap }}</td>
                                    <td>{{ $rp->nama_kelas ?? '-' }}</td>
                                    <td>{{ $rp->nama_jurusan ?? '-' }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="/invoice/add/{{ $rp->id }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye me-1"></i>View Invoice
                                            </a>
                                            <a href="/invoice/class/{{ $rp->kelas_id }}" class="btn btn-sm btn-success">
                                                <i class="fas fa-file-invoice-dollar me-1"></i>Class Billing
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- FOOTER --}}
            <div class="card-footer bg-light">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                        Total Data: {{ count($datasekolah) }} siswa
                    </small>
                    <div>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
