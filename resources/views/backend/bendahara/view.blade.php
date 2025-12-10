@extends('backend.layout.base')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">DATA BENDAHARA</h3>
        <div>
            <a href="{{ route('bendahara.create', ['type' => 'pemasukan']) }}" class="btn btn-primary me-2">
                + Input Pemasukan
            </a>
            <a href="{{ route('bendahara.create', ['type' => 'pengeluaran']) }}" class="btn btn-danger">
                + Input Pengeluaran
            </a>
        </div>
    </div>

    <div class="row mb-4"> 
        <div class="col-md-4"> 
            <div class="card text-white shadow" style="background-color: #007F3E; font-weight: normal;"> 
                <div class="card-body"> 
                    <h5 class="card-title text-white">Saldo Total</h5> 
                    <p class="card-text fs-4">Rp {{ number_format($saldo, 0, ',', '.') }}</p> 
                </div> 
            </div> 
        </div> 
        <div class="col-md-4"> 
            <div class="card text-white shadow" style="background-color: #007F3E; font-weight: normal;"> 
                <div class="card-body"> 
                    <h5 class="card-title text-white">Total Pemasukan</h5> 
                    <p class="card-text fs-4">Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</p> 
                </div> 
            </div> 
        </div> 
        <div class="col-md-4"> 
            <div class="card text-white shadow" style="background-color: #007F3E; font-weight: normal;"> 
                <div class="card-body"> 
                    <h5 class="card-title text-white">Total Pengeluaran</h5> 
                    <p class="card-text fs-4">Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</p> 
                </div> 
            </div> 
        </div> 
    </div>
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <h4 class="card-header text-white fw-bold" style="background-color: #007F3E; font-weight: normal;">📈 Rekap Pemasukan</h4>
                <div class="card-body">
                    @forelse ($rekapPemasukan as $rp)
                        <div class="d-flex justify-content-between mb-2 border-bottom pb-1">
                            <span>{{ $rp->jenis }}</span>
                            <span class="fw-bold text-success">Rp {{ number_format($rp->total, 0, ',', '.') }}</span>
                        </div>
                    @empty
                        <p class="text-muted">Belum ada data pemasukan</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow border-0">
                <h4 class="card-header text-white fw-bold" style="background-color: #007F3E; font-weight: normal;">📉 Rekap Pengeluaran</h4>
                <div class="card-body">
                    @forelse ($rekapPengeluaran as $rg)
                        <div class="d-flex justify-content-between mb-2 border-bottom pb-1">
                            <span>{{ $rg->jenis }}</span>
                            <span class="fw-bold text-danger">Rp {{ number_format($rg->total, 0, ',', '.') }}</span>
                        </div>
                    @empty
                        <p class="text-muted">Belum ada data pengeluaran</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="datatable" class="table table-striped w-100" style="min-width: 600px;">
            <thead class="table">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Jenis Pemasukan</th>
                    <th>Pemasukan</th>
                    <th>Jenis Pengeluaran</th>
                    <th>Pengeluaran</th>
                    <th>Bukti Transaksi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                        <td>{{ $item->uraian }}</td>
                        <td>{{ $item->nama_pemasukan ?? '-' }}</td>
                        <td>Rp {{ number_format($item->pemasukan, 0, ',', '.') }}</td>
                        <td>{{ $item->nama_pengeluaran ?? '-' }}</td>
                        <td>Rp {{ number_format($item->pengeluaran, 0, ',', '.') }}</td>
                        <td>
                            @if ($item->bukti_transaksi)
                                <a href="{{ asset('storage/'.$item->bukti_transaksi) }}" target="_blank" class="btn btn-sm btn-info">Lihat Bukti</a>
                            @else
                                <span>Belum Ada Bukti</span>
                            @endif
                        </td>                                               
                        <td>
                            <a href="{{ route('bendahara.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            @if (request()->user()->role == 1)
                            <form action="{{ route('bendahara.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
