@extends('backend.layout.base')

@section('content')
<div class="row">
    <div class="col-mb">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0" style="font-size: 30px">{{ $title }}</h5>
            </div>
            <div class="card-body">
                {{-- Pilih Kelas --}}
                <div class="row mb-3">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="kelas_id" class="form-label">Pilih Madrasah/Sekolah</label>
                                <select class="form-select" id="kelas_id" required>
                                    <option value="">-- Pilih Sekolah/Madrasah --</option>
                                    @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <button type="button" class="btn btn-primary w-100" id="btnTampilkan">Tampilkan</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tabel User --}}
                <div class="table-responsive mb-3">
                    <table class="table table-striped table-bordered" id="user-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Periode</th>
                                <th>Upload File SK</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="user-table-body">
                            <tr>
                                <td colspan="4" class="text-center">Silakan pilih kelas terlebih dahulu !</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Script --}}
<script>
document.getElementById('btnTampilkan').addEventListener('click', function () {
    const kelasId = document.getElementById('kelas_id').value;
    const tbody = document.getElementById('user-table-body');

    if (!kelasId) {
        alert('Silakan pilih kelas terlebih dahulu.');
        return;
    }

    tbody.innerHTML = `<tr><td colspan="4" class="text-center">Memuat data...</td></tr>`;

    fetch(`/get-users/${kelasId}`)
        .then(response => {
            if (!response.ok) throw new Error('Gagal mengambil data.');
            return response.json();
        })
        .then(data => {
            tbody.innerHTML = '';

            if (data.length === 0) {
                tbody.innerHTML = `<tr><td colspan="4" class="text-center">Tidak ada siswa di kelas ini</td></tr>`;
                return;
            }

            data.forEach((user, index) => {
                const isUploaded = user.sk01_2025 && user.sk01_2025 !== '';

                tbody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${user.nama_lengkap}</td>
                        <td>${user.periode ?? '-'}</td> <!-- Tambahkan kolom periode -->
                        <td>
                            <input type="file" class="form-control file-sk" data-user="${user.id}" ${isUploaded ? 'disabled' : ''}>
                            ${isUploaded ? `<small class="text-light">Sudah Upload: ${user.sk01_2025}</small>` : ''}
                        </td>
                        <td>
                            ${!isUploaded
                                ? `<button type="button" class="btn btn-success btn-upload" data-user="${user.id}">Upload</button>`
                                : `<span class="text-muted">Sudah Diupload</span>`}
                        </td>
                    </tr>
                `;
            });

        })
        .catch(error => {
            console.error('Error:', error);
            tbody.innerHTML = `<tr><td colspan="4" class="text-danger text-center">Gagal memuat data</td></tr>`;
        });
});

// Handle Upload Button per Baris
document.addEventListener('click', function (e) {
    if (e.target.classList.contains('btn-upload')) {
        const userId = e.target.dataset.user;
        const row = e.target.closest('tr');
        const fileInput = row.querySelector('.file-sk');

        if (!fileInput.files.length) {
            alert('Silakan pilih file terlebih dahulu.');
            return;
        }

        const formData = new FormData();
        formData.append('user_id', userId);
        formData.append('file_sk', fileInput.files[0]);
        formData.append('_token', '{{ csrf_token() }}');

        e.target.innerText = 'Uploading...';
        e.target.disabled = true;

        fetch("{{ route('upload.sk.user') }}", {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            alert(data.message || 'Berhasil upload SK');
            e.target.innerText = 'Upload';
            e.target.disabled = false;
        })
        .catch(err => {
            console.error(err);
            alert('Gagal upload file');
            e.target.innerText = 'Upload';
            e.target.disabled = false;
        });
    }
});
</script>
@endsection
