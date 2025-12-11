@extends('backend.layout.base')

@section('content')
<div class="card table-responsive">
    <div class="card-header d-flex justify-content-between align-items-center mb-0">
        <h5 class="mb-0" style="font-size: 30px">
            <b>{{ $title }}</b>
            <p></p>
            <p style="font-size: 16px; margin-bottom: 0; font-weight: normal;">Lengkapi Detail Data dan Dokumen</p>
        </h5>
    </div>
    <hr style="border: none; border-top: 1px solid #333; margin-top: 2px; margin-bottom: 2;">
    <div class="container">
        <div style="text-align: center;">
            <a href="https://drive.google.com/file/d/1yb4bsjRpd48dPRZ13bIawqaMUkphxN8i/view?usp=sharing" target="_blank" class="btn btn-danger mb-2">Download PDF</a>
            <p style="font-size: 16px; color: #dc3545; margin: 0; font-weight: normal;">
                Silahkan Download dan Sesuaikan Template Surat Permohonan Sebelum Input Data!
            </p>
        </div>
        <p></p>
    </div>
    <hr style="border: none; border-top: 1px solid #333; margin-top: 2px; margin-bottom: 2;">
    <div class="card-body">
        <form action="/updatesipinter/proses" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label" for="npsn">NPSN</label>
                        <input type="number" class="form-control" id="npsn" name="npsn"
                            placeholder="Masukan NPSN" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat Sekolah/Madrasah</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            placeholder="Masukan Alamat" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="tanah">Satuan Pendidikan tersebut didirikan di atas tanah</label>
                        <select class="form-control" id="tanah" required onchange="toggleInput()">
                            <option value="">-- Pilih --</option>
                            <option value="Milik Jam'iyyah Nahdatul Ulama">Milik Jam'iyyah Nahdatul Ulama</option>
                            <option value="Milik Yayasan">Milik Yayasan...</option>
                            <option value="Milik Pribadi Atas Nama">Milik Pribadi Atas Nama...</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="customInput" placeholder="Tulis di sini..." style="display: none;" oninput="updateSelect()">
                        <input type="hidden" id="finalTanah" name="tanah"> <!-- Hidden input untuk dikirim ke backend -->
                    </div>
                </div>
                
                <script>
                function toggleInput() {
                    var select = document.getElementById("tanah");
                    var input = document.getElementById("customInput");
                    var hiddenInput = document.getElementById("finalTanah");
                
                    if (select.value === "Milik Yayasan" || select.value === "Milik Pribadi Atas Nama") {
                        input.style.display = "block";
                        input.focus();
                    } else {
                        input.style.display = "none";
                        input.value = "";
                    }
                    hiddenInput.value = select.value; // Simpan nilai dropdown awal
                }
                
                function updateSelect() {
                    var select = document.getElementById("tanah");
                    var input = document.getElementById("customInput");
                    var hiddenInput = document.getElementById("finalTanah");
                
                    if (input.value.trim() !== "") {
                        hiddenInput.value = select.value + " - " + input.value; 
                    } else {
                        hiddenInput.value = select.value; // Jika input kosong, gunakan nilai default
                    }
                }
                </script>                                                                

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="status_tanah">Status tanah tempat dibangun Satuan Pendidikan tersebut berupa tanah</label>
                        <select class="form-control" id="status_tanah" name="status_tanah" required>
                            <option value="">-- Pilih --</option>pengelolaakta
                            <option value="tanah hibah">tanah hibah</option>
                            <option value="tanah wakaf">tanah wakaf</option>
                            <option value="tanah pinjam pakai">tanah pinjam pakai</option>
                            <option value="tanah sewa">tanah sewa</option>
                            <option value="Lainnya">Lainnya....</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="pengelolaakta">Satuan Pendidikan tersebut berada dibawah pengelolaan</label>
                        <select class="form-control" id="pengelolaakta" name="pengelolaakta" required>
                            <option value="">-- Pilih --</option>
                            <option value="Pengelolaan Badan yang dibentuk LP Ma’arif NU">Pengelolaan Badan yang dibentuk LP Ma’arif NU</option>
                            <option value="Pengelolaan Yayasan yang berafiliasi dengan LP Ma’arif NU">Pengelolaan Yayasan yang berafiliasi dengan LP Ma’arif NU</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="akta">Satuan Pendidikan tersebut menggunakan akta notaris</label>
                        <select class="form-control" id="akta" required onchange="toggleAktaInput()">
                            <option value="">-- Pilih --</option>
                            <option value="Akta Badan Hukum NU">Akta Badan Hukum NU</option>
                            <option value="Akta Yayasan dengan nama">Akta Yayasan dengan nama...</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="customAktaInput" placeholder="Tulis di sini..." style="display: none;" oninput="updateAktaSelect()">
                        <input type="hidden" id="finalAkta" name="akta"> <!-- Hidden input untuk dikirim ke backend -->
                    </div>
                </div>
                
                <script>
                function toggleAktaInput() {
                    var select = document.getElementById("akta");
                    var input = document.getElementById("customAktaInput");
                    var hiddenInput = document.getElementById("finalAkta");
                
                    if (select.value === "Akta Yayasan dengan nama") {
                        input.style.display = "block";
                        input.focus();
                    } else {
                        input.style.display = "none";
                        input.value = "";
                    }
                    hiddenInput.value = select.value; // Simpan nilai dropdown awal
                }
                
                function updateAktaSelect() {
                    var select = document.getElementById("akta");
                    var input = document.getElementById("customAktaInput");
                    var hiddenInput = document.getElementById("finalAkta");
                
                    if (input.value.trim() !== "") {
                        hiddenInput.value = select.value + " - " + input.value; 
                    } else {
                        hiddenInput.value = select.value; // Jika input kosong, gunakan nilai default
                    }
                }
                </script>
                                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="updatesipinter">Upload File Surat Permohonan (PDF)</label>
                        <input type="file" class="form-control" id="updatesipinter" name="updatesipinter" 
                            accept="application/pdf" required onchange="validateFile()" />
                        <small class="text-danger" id="fileError" style="display: none;">Hanya file PDF yang diperbolehkan!</small>
                    </div>
                </div>
                
                <script>
                function validateFile() {
                    var fileInput = document.getElementById("updatesipinter");
                    var filePath = fileInput.value;
                    var fileError = document.getElementById("fileError");
                    
                    // Ekstensi yang diperbolehkan
                    var allowedExtensions = /(\.pdf)$/i;
                    
                    if (!allowedExtensions.exec(filePath)) {
                        fileError.style.display = "block"; // Tampilkan pesan error
                        fileInput.value = ""; // Reset input file
                    } else {
                        fileError.style.display = "none"; // Sembunyikan pesan error jika valid
                    }
                }
                </script>
                
                <b>KETERANGAN:</b>
                <P>Setelah selesai menginput, data dan dokumen yang masuk akan kami proses untuk menerbitkan Surat Keterangan Aset dari LP. Ma'arif NU PCNU Gunungkidul dan Surat Rekomendasi dari LP. Ma'arif PWNU D.I. Yogyakarta.</P>
                <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/updatesipinter" type="button" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection