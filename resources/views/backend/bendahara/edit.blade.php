@extends('backend.layout.base')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Edit Data Bendahara</h4>

    <form action="{{ route('bendahara.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" 
                   value="{{ old('tanggal', $item->tanggal) }}" required>
        </div>

        <div class="mb-3">
            <label for="uraian" class="form-label">Uraian</label>
            <input type="text" name="uraian" class="form-control" 
                   value="{{ old('uraian', $item->uraian) }}" required>
        </div>

        {{-- Kalau pemasukan --}}
        @if ($item->pemasukan > 0)
            <div class="mb-3">
                <label for="jenis_pemasukan_id" class="form-label">Jenis Pemasukan</label>
                <select name="jenis_pemasukan_id" class="form-control" required>
                    <option value="">-- Pilih Jenis Pemasukan --</option>
                    @foreach($jenisPemasukan as $jp)
                        <option value="{{ $jp->id }}" 
                            {{ $item->jenis_pemasukan_id == $jp->id ? 'selected' : '' }}>
                            {{ $jp->jenis }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="pemasukan" class="form-label">Pemasukan</label>
                <input type="number" name="pemasukan" class="form-control" 
                       value="{{ old('pemasukan', $item->pemasukan) }}">
            </div>

        {{-- Kalau pengeluaran --}}
        @elseif ($item->pengeluaran > 0)
            <div class="mb-3">
                <label for="jenis_pengeluaran_id" class="form-label">Jenis Pengeluaran</label>
                <select name="jenis_pengeluaran_id" class="form-control" required>
                    <option value="">-- Pilih Jenis Pengeluaran --</option>
                    @foreach($jenisPengeluaran as $jg)
                        <option value="{{ $jg->id }}" 
                            {{ $item->jenis_pengeluaran_id == $jg->id ? 'selected' : '' }}>
                            {{ $jg->jenis }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="pengeluaran" class="form-label">Pengeluaran</label>
                <input type="number" name="pengeluaran" class="form-control" 
                       value="{{ old('pengeluaran', $item->pengeluaran) }}">
            </div>
        @endif

        <div class="mb-3">
            <label for="bukti_transaksi" class="form-label">Bukti Transaksi</label>
            <input type="file" name="bukti_transaksi" class="form-control" accept="image/*,application/pdf">
            
            @if ($item->bukti_transaksi)
                <p class="mt-2">Bukti transaksi yang ada:</p>
                <a href="{{ asset('storage/'.$item->bukti_transaksi) }}" target="_blank" 
                   class="btn btn-info btn-sm">Lihat Bukti</a>
            @else
                <span>Belum ada bukti transaksi sebelumnya</span>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('bendahara.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
