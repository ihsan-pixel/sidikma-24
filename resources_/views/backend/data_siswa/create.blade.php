@extends('backend.layout.base')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Tambah Data Siswa</h4>

    <form action="{{ route('data-siswa.store') }}" method="POST">
        @csrf

        {{-- Tahun Pelajaran --}}
        <div class="mb-3">
            <label class="form-label">Tahun Pelajaran</label>
            <select name="tahun_pelajaran" id="tahun_pelajaran" class="form-control" required>
                <option value="">-- Pilih Tahun Pelajaran --</option>
                @foreach($tahun_ajaran as $ta)
                    <option value="{{ $ta->tahun }}">{{ $ta->tahun }}</option>
                @endforeach
            </select>
        </div>

        {{-- Asal Madrasah --}}
       <div class="mb-3">
            <label class="form-label">Asal Madrasah</label>

            @if(auth()->user()->role == 3)
                {{-- ROLE 4: tampilkan INPUT READONLY --}}
                <input type="text"
                    class="form-control"
                    value="{{ $madrasah->first()->nama_kelas ?? '' }}"
                    readonly>

                <input type="hidden"
                    name="madrasah_id"
                    id="madrasah_id"
                    value="{{ auth()->user()->kelas_id }}">
            @else
                {{-- ROLE LAIN --}}
                <select name="madrasah_id"
                        id="madrasah_id"
                        class="form-control"
                        required>
                    <option value="">-- Pilih Madrasah --</option>
                    @foreach($madrasah as $m)
                        <option value="{{ $m->id }}">
                            {{ $m->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            @endif
        </div>

        {{-- KELAS 1 - 6 --}}
        <div class="row d-none" id="kelas-1-6">
            @for($i=1; $i<=6; $i++)
                <div class="col-md-4 mb-3">
                    <label class="form-label">Jumlah Kelas {{ $i }}</label>
                    <input type="number"
                           name="kelas{{ $i }}"
                           class="form-control kelas-input kelas-1-6"
                           value="0"
                           min="0"
                           disabled>
                </div>
            @endfor
        </div>

        {{-- KELAS 7 - 9 --}}
        <div class="row d-none" id="kelas-7-9">
            @for($i=7; $i<=9; $i++)
                <div class="col-md-4 mb-3">
                    <label class="form-label">Jumlah Kelas {{ $i }}</label>
                    <input type="number"
                           name="kelas{{ $i }}"
                           class="form-control kelas-input kelas-7-9"
                           value="0"
                           min="0"
                           disabled>
                </div>
            @endfor
        </div>

        {{-- TOTAL --}}
        <div class="row d-none" id="total-wrapper">
            <div class="col-md-4 mb-3">
                <label class="form-label fw-bold">TOTAL SISWA</label>
                <input type="number"
                       name="total"
                       id="total"
                       class="form-control fw-bold text-primary"
                       value="0"
                       readonly>
                <samll>* Total siswa akan terhitung otomatis berdasarkan input jumlah siswa per kelas.</samll>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('data-siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

{{-- SCRIPT --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tahun      = document.getElementById('tahun_pelajaran');

    const kelas16    = document.getElementById('kelas-1-6');
    const kelas79    = document.getElementById('kelas-7-9');
    const totalWrap  = document.getElementById('total-wrapper');

    const kelasInputs = document.querySelectorAll('.kelas-input');
    const totalInput  = document.getElementById('total');

    const isRole4 = {{ auth()->user()->role == 4 ? 'true' : 'false' }};

    function getMadrasahId() {
        const hidden = document.querySelector('input[name="madrasah_id"][type="hidden"]');
        const select = document.querySelector('select[name="madrasah_id"]');

        if (hidden) return hidden.value;
        if (select) return select.value;

        return null;
    }

    function hitungTotal() {
        let total = 0;
        document.querySelectorAll('.kelas-input:not([disabled])')
            .forEach(i => total += parseInt(i.value) || 0);
        totalInput.value = total;
    }

    function resetAll() {
        kelas16.classList.add('d-none');
        kelas79.classList.add('d-none');
        totalWrap.classList.add('d-none');

        kelasInputs.forEach(i => {
            i.disabled = true;
            i.value = 0;
        });

        totalInput.value = 0;
    }

    function toggleKelas() {
        resetAll();

        const madrasahId = getMadrasahId();
        if (!tahun.value || !madrasahId) return;

        const id = parseInt(madrasahId);

        if (id >= 1 && id <= 63) {
            kelas16.classList.remove('d-none');
            kelasInputs.forEach(i => {
                if (i.classList.contains('kelas-1-6')) i.disabled = false;
            });
        } else {
            kelas79.classList.remove('d-none');
            kelasInputs.forEach(i => {
                if (i.classList.contains('kelas-7-9')) i.disabled = false;
            });
        }

        totalWrap.classList.remove('d-none');
        hitungTotal();
    }

    // 🔁 EVENT
    kelasInputs.forEach(i => i.addEventListener('input', hitungTotal));
    tahun.addEventListener('change', toggleKelas);

    // ✅ ROLE 4: AUTO JALANKAN SAAT LOAD
    if (isRole4) {
        toggleKelas();
    }
});
</script>

@endsection
