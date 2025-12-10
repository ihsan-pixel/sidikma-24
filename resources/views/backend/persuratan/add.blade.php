@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <form action="/persuratan/proses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Nama Madrasah/Sekolah</label>
                                    <select class="form-control" name="kelas" id="kelas" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($kelas as $l)
                                            <option value="{{ $l->id }}">{{ $l->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="jenis">Jenis Surat</label>
                                    <select class="form-control" id="jenis" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Surat Rekomendasi">Surat Rekomendasi</option>
                                        <option value="Surat Keterangan">Surat Keterangan</option>
                                        <option value="Surat Perintah Tugas">Surat Perintah Tugas</option>
                                        <option value="Surat Permohonan">Surat Permohonan</option>
                                        <option value="Surat Undangan">Surat Undangan</option>
                                        <option value="Lainnya">Isi Sendiri</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Input Teks Untuk Custom Jenis -->
                            <div class="col-md-6" id="customJenisContainer" style="display: none;">
                                <div class="mb-3">
                                    <label class="form-label" for="custom_jenis">Masukkan Jenis Surat</label>
                                    <input type="text" class="form-control" id="custom_jenis" placeholder="Tulis jenis surat...">
                                </div>
                            </div>
                            
                            <!-- Hidden Input Untuk Mengirimkan Data Ke Server -->
                            <input type="hidden" name="jenis" id="jenis_hidden">
                            
                            <script>
                                document.getElementById('jenis').addEventListener('change', function() {
                                    var customContainer = document.getElementById('customJenisContainer');
                                    var customInput = document.getElementById('custom_jenis');
                                    var hiddenInput = document.getElementById('jenis_hidden');
                            
                                    if (this.value === 'Lainnya') {
                                        customContainer.style.display = 'block';
                                        customInput.setAttribute('required', 'required');
                                        hiddenInput.value = ''; // Kosongkan dulu
                                    } else {
                                        customContainer.style.display = 'none';
                                        customInput.removeAttribute('required');
                                        customInput.value = ''; // Reset input
                                        hiddenInput.value = this.value; // Simpan value dari select
                                    }
                                });
                            
                                // Pastikan hidden input berisi data yang benar sebelum submit
                                document.querySelector('form').addEventListener('submit', function() {
                                    var jenisSelect = document.getElementById('jenis');
                                    var customInput = document.getElementById('custom_jenis');
                                    var hiddenInput = document.getElementById('jenis_hidden');
                            
                                    if (jenisSelect.value === 'Lainnya' && customInput.value.trim() !== '') {
                                        hiddenInput.value = customInput.value; // Simpan input custom sebagai 'jenis'
                                    }
                                });
                            </script>      
                            
                        
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="full_name">Upload Surat Permohonan (PDF)</label>
                                    <input type="file" class="form-control" id="persuratan" name="persuratan"
                                        placeholder="Upload" required />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/persuratan" type="button" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection