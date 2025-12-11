<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pengajuan SK Yayasan Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f9fc;
            color: #333;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #888;
        }
        .status {
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>📄 Pengajuan Proposal Baru</h2>

        @php
            $kelasMap = [
                1 => 'MI YAPPI Badongan',
                10 => 'MI YAPPI Baleharjo',
                11 => 'MI YAPPI Balong',
                12 => 'MI YAPPI Banjaran',
                13 => 'MI YAPPI Bansari',
                14 => 'MI YAPPI Banyusoco',
                15 => 'MI YAPPI Batusari',
                16 => 'MI YAPPI Cekel',
                17 => 'MI YAPPI Doga',
                18 => 'MI YAPPI Dondong',
                19 => 'MI YAPPI Gedad I',
                20 => 'MI YAPPI Gedad II',
                21 => 'MI YAPPI Gubukrubuh',
                22 => 'MI YAPPI Kalangan',
                23 => 'MI YAPPI Kalongan',
                24 => 'MI YAPPI Karang',
                26 => 'MI YAPPI Karangtritis',
                27 => 'MI YAPPI Karangwetan',
                28 => 'MI YAPPI Kedungwanglu',
                29 => 'MI YAPPI Klepu',
                30 => 'MI YAPPI Mulusan',
                31 => 'MI YAPPI Natah',
                32 => 'MI YAPPI Ngembes',
                33 => 'MI YAPPI Nglebeng',
                34 => 'MI YAPPI Ngleri',
                35 => 'MI YAPPI Ngrancang',
                36 => 'MI YAPPI Ngunut',
                37 => 'MI YAPPI Ngrati',
                38 => 'MI YAPPI Nologaten',
                39 => 'MI YAPPI Payak',
                40 => 'MI YAPPI Peyuyon',
                41 => 'MI YAPPI Pijenan',
                42 => 'MI YAPPI Plalar',
                43 => 'MI YAPPI Pucung',
                44 => 'MI YAPPI Purwo',
                45 => 'MI YAPPI Putat',
                46 => 'MI YAPPI Randukuning',
                47 => 'MI YAPPI Rejosari',
                48 => 'MI YAPPI Ringintumpang',
                49 => 'MI YAPPI Sawahan',
                50 => 'MI YAPPI Semoyo',
                51 => 'MI YAPPI Sendang',
                52 => 'MI YAPPI Tambakromo',
                53 => 'MI YAPPI Tanjung',
                54 => 'MI YAPPI Tegalweru',
                55 => 'MI YAPPI Tekik',
                57 => 'MI YAPPI Tobong',
                58 => 'MI YAPPI Wiyoko',
                60 => 'MI Maarif Mulo',
                62 => 'MI Maarif Wareng',
                63 => 'MI Wasathiyah',
                65 => 'MTs YAPPI Dengok',
                66 => 'MTs YAPPI Jetis',
                67 => 'MTs YAPPI Kenteng',
                68 => 'MTs YAPPI Mulusan',
                70 => 'MTs YAPPI Sumberjo',
                71 => 'MTs Jamul Muawanah',
                72 => 'SMP Persiapan Semanu',
                74 => 'SMP Pembangunan I Karangmojo',
                75 => 'SMP Pembangunan Ponjong',
                76 => 'SMP Pembangunan Semin',
            ];
            $asal = $kelasMap[$data['kelas']] ?? 'Madrasah Tidak Diketahui';
        @endphp
        @php
            $mapelMap = [
                1  => 'Mengajar Guru Kelas',
                2  => 'Mengajar Guru Fikih',
                3  => 'Mengajar PAI',
                4  => 'Mengajar Mapel Bahasa Arab',
                5  => 'Mengajar Mapel Akidah Akhlak',
                6  => 'Mengajar Mapel Quran Hadis',
                7  => 'Mengajar Mapel Matematika',
                8  => 'Mengajar Mapel Bahasa Indonesia',
                9  => 'Mengajar Mapel SKI',
                10 => 'Mengajar PJOK',
                11 => 'Mengajar Bahasa Jawa',
                12 => 'Mengajar Mapel Bahasa Inggris',
                13 => 'Mengajar Mapel IPA',
                14 => 'Mengajar Mapel IPS',
                15 => 'Mengajar Mapel PKN',
                16 => 'Mengajar Mapel SBK',
                17 => 'Tenaga Administrasi',
                18 => 'Kepala Madrasah/Sekolah',
                19 => 'Penjaga Sekolah/Madrasah',
                20 => 'Mengajar TIK/Prakarya',
                21 => 'Mengajar Guru BK',
                22 => 'Mengajar Ke NU an',
            ];
            $peran = $mapelMap[$data['ketugasan']] ?? 'Peran tidak diketahui';
        @endphp
        @php
            $jurusanMap = [
                1 => 'Guru Tetap Yayasan',
                2 => 'Guru Tetap Yayasan Sertifikasi Inpassing',
                3 => 'Guru Tetap Yayasan Sertifikasi Non Inpassing',
                4 => 'Guru Tidak Tetap',
                5 => 'PNS Sertifikasi',
                6 => 'Pegawai Tetap Yayasan',
                7 => 'Pegawai Tidak Tetap',
                8 => 'PNS Non Serifikasi',
            ];
        
            $jurusan = $jurusanMap[$data['status_kepegawaian']] ?? 'Jurusan tidak diketahui';
        @endphp

        <p><strong>Atas Nama:</strong> {{ $data['nama'] }}</p>
        <p><strong>Asal Madrasah/Sekolah:</strong> {{ $asal }}</p>
        <p><strong>Nomor EwanuGK:</strong> {{ $data['ewanugk'] }}</p>
        <p><strong>email:</strong> {{ $data['email'] }}</p>
        <p><strong>Nomor Telepon:</strong> {{ $data['no_telepon'] }}</p>
        <p><strong>Status Kepegawaian:</strong> {{ $jurusan }}</p>
        <p><strong>Tempat Tanggal Lahir:</strong> {{ $data['tempat_lahir'] }}, {{ $data['tanggal_lahir'] }}</p>
        <p><strong>TMT Pertama:</strong> {{ $data['tmt_pertama'] }}</p>
        <p><strong>Ketugasan:</strong> {{ $peran }}</p>

        <div class="footer">
            Email ini dikirim otomatis oleh sistem. Harap tidak membalas email ini.
        </div>
    </div>
</body>
</html>
