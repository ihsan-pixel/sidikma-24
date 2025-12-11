@extends('backend.layout.base')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">
        Tambah Data {{ ucfirst($type) }}
    </h4>

    <form action="{{ route('bendahara.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="type" value="{{ $type }}">

        {{-- Tanggal --}}
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>

        {{-- Uraian --}}
        <div class="mb-3">
            <label for="uraian" class="form-label">Uraian</label>
            <input type="text" name="uraian" id="uraian" class="form-control" required>
        </div>

        {{-- Form khusus Pemasukan --}}
        @if ($type == 'pemasukan')
            <div class="mb-3">
                <label for="jenis_pemasukan_id" class="form-label">Jenis Pemasukan</label>
                <select name="jenis_pemasukan_id" id="jenis_pemasukan_id" class="form-control" required>
                    <option value="" selected disabled>-- Pilih Jenis Pemasukan --</option>
                    @foreach($jenisPemasukan as $jp)
                        <option value="{{ $jp->id }}">{{ $jp->jenis }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="pemasukan" class="form-label">Jumlah Pemasukan</label>
                <input type="number" name="pemasukan" id="pemasukan" class="form-control" required>
            </div>
        @endif

        {{-- Form khusus Pengeluaran --}}
        @if ($type == 'pengeluaran')
            <div class="mb-3">
                <label for="jenis_pengeluaran_id" class="form-label">Jenis Pengeluaran</label>
                <select name="jenis_pengeluaran_id" id="jenis_pengeluaran_id" class="form-control" required>
                    <option value="" selected disabled>-- Pilih Jenis Pengeluaran --</option>
                    @foreach($jenisPengeluaran as $jg)
                        <option value="{{ $jg->id }}">{{ $jg->jenis }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="pengeluaran" class="form-label">Jumlah Pengeluaran</label>
                <input type="number" name="pengeluaran" id="pengeluaran" class="form-control" required>
            </div>
        @endif

        {{-- Bukti Transaksi --}}
        <div class="mb-3">
            <label for="bukti_transaksi" class="form-label">Bukti Transaksi</label>
            <input type="file" name="bukti_transaksi" id="bukti_transaksi" class="form-control" accept="image/*,application/pdf">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('bendahara.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
