# TODO: Tambahkan Menu Data Jumlah Siswa untuk User Role 1 dengan Validasi

## Informasi yang Dikumpulkan
- DataSiswaController sudah ada dengan CRUD dasar (index, create, store, edit, update, destroy).
- Model DataSiswa menggunakan fillable: madrasah_id, tahun_pelajaran, kelas1-9, total.
- Routes sudah didefinisikan di web.php di dalam middleware auth.
- Model Kelas digunakan untuk madrasah, kemungkinan memiliki field jenjang.
- Model User kemungkinan memiliki field role.
- Views belum ada, perlu dibuat di resources/views/backend/data_siswa/.
- Tidak ada validasi role atau jenjang saat ini.
- Tidak ada validasi unik per tahun pelajaran dan madrasah_id.

## Rencana Implementasi
1. **Periksa Model User dan Kelas**:
   - Baca app/Models/User.php untuk konfirmasi field role.
   - Baca app/Models/Kelas.php untuk konfirmasi field jenjang.

2. **Tambahkan Middleware Role**:
   - Buat middleware untuk memeriksa role user (role 1).
   - Aplikasikan middleware ke routes data-siswa.

3. **Update DataSiswaController**:
   - Tambahkan validasi unik untuk kombinasi madrasah_id dan tahun_pelajaran.
   - Modifikasi create dan edit untuk menangani jenjang dan kelas dinamis.

4. **Buat Views untuk Data Siswa**:
   - index.blade.php: Tabel daftar data siswa.
   - create.blade.php: Form input dengan dropdown jenjang, lalu kelas berdasarkan jenjang.
   - edit.blade.php: Mirip create, tapi untuk edit.

5. **Tambahkan JavaScript/Ajax untuk Validasi Dinamis**:
   - Saat memilih jenjang, tampilkan kelas 1-6 untuk MI atau 7-9 untuk MTs/SMP.
   - Validasi input kelas berdasarkan jenjang.

6. **Update Menu/Sidebar**:
   - Tambahkan link menu "Data Jumlah Siswa" di sidebar untuk user role 1.

7. **Testing dan Validasi**:
   - Test CRUD dengan validasi jenjang dan tahun pelajaran.
   - Pastikan hanya user role 1 yang bisa akses.

## File yang Akan Dimodifikasi/Ditambahkan
- app/Models/User.php (baca untuk konfirmasi)
- app/Models/Kelas.php (baca untuk konfirmasi)
- app/Http/Controllers/DataSiswaController.php (update validasi dan logika)
- app/Http/Middleware/RoleMiddleware.php (baru, jika perlu)
- resources/views/backend/data_siswa/index.blade.php (baru)
- resources/views/backend/data_siswa/create.blade.php (baru)
- resources/views/backend/data_siswa/edit.blade.php (baru)
- resources/views/backend/layouts/sidebar.blade.php (update menu)
- routes/web.php (update dengan middleware role)

## Langkah-Langkah Selanjutnya
- Setelah plan disetujui, mulai dari memeriksa model dan middleware.
- Buat views dan update controller.
- Test fungsionalitas.
