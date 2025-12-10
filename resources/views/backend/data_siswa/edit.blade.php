@extends('backend.layout.base')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Edit Data Siswa</h4>

    <form id="formUpdate"
          action="{{ route('data-siswa.update', $data->id) }}"
          method="POST">
        @csrf
        @method('PUT')

        {{-- Tahun Pelajaran --}}
        <div class="mb-3">
            <label class="form-label">Tahun Pelajaran</label>
            <input type="text"
                   name="tahun_pelajaran"
                   class="form-control"
                   value="{{ $data->tahun_pelajaran }}"
                   required>
        </div>

        {{-- Asal Madrasah (READONLY FIX) --}}
        <div class="mb-3">
            <label class="form-label">Asal Madrasah</label>

            <input type="text"
                   class="form-control"
                   value="{{ $madrasah->firstWhere('id', $data->madrasah_id)->nama_kelas ?? '' }}"
                   readonly>

            <input type="hidden"
                   name="madrasah_id"
                   id="madrasah_id"
                   value="{{ $data->madrasah_id }}">
        </div>

        {{-- KELAS 1 - 6 --}}
        <div class="row d-none" id="kelas-1-6">
            @for($i=1; $i<=6; $i++)
                <div class="col-md-4 mb-3">
                    <label class="form-label">Jumlah Kelas {{ $i }}</label>
                    <input type="number"
                           name="kelas{{ $i }}"
                           class="form-control kelas-input kelas-1-6"
                           value="{{ $data['kelas'.$i] }}"
                           min="0">
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
                           value="{{ $data['kelas'.$i] }}"
                           min="0">
                </div>
            @endfor
        </div>

        {{-- TOTAL --}}
        <div class="row d-none" id="total-wrapper">
            <div class="col-md-4 mb-3">
                <label class="form-label fw-bold">TOTAL SISWA</label>
                <input type="number"
                       id="total"
                       class="form-control fw-bold text-primary"
                       value="{{ $data->total }}"
                       readonly>
            </div>
        </div>

        {{-- BUTTON --}}
        <button type="button"
                id="btnUpdate"
                class="btn btn-success">
            Update
        </button>
        <a href="{{ route('data-siswa.index') }}" class="btn btn-secondary">
            Batal
        </a>
    </form>
</div>

{{-- SCRIPT --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const madrasahId = document.getElementById('madrasah_id').value;

    const kelas16   = document.getElementById('kelas-1-6');
    const kelas79   = document.getElementById('kelas-7-9');
    const totalWrap = document.getElementById('total-wrapper');

    const kelasInputs = document.querySelectorAll('.kelas-input');
    const totalInput  = document.getElementById('total');

    function hitungTotal() {
        let total = 0;
        kelasInputs.forEach(i => total += parseInt(i.value) || 0);
        totalInput.value = total;
    }

    function toggleKelas() {
        kelasInputs.forEach(i => i.disabled = true);

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

    kelasInputs.forEach(i => i.addEventListener('input', hitungTotal));
    toggleKelas();

    // ✅ SWEETALERT KONFIRMASI UPDATE
    document.getElementById('btnUpdate').addEventListener('click', function () {
        Swal.fire({
            title: 'Yakin update data?',
            text: 'Perubahan data siswa akan disimpan.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Update',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('formUpdate').submit();
            }
        });
    });
});
</script>

{{-- SWEETALERT VALIDASI ERROR --}}
@if ($errors->any())
<script>
Swal.fire({
    icon: 'error',
    title: 'Validasi Gagal',
    html: `<ul style="text-align:left">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>`
});
</script>
@endif
@endsection
