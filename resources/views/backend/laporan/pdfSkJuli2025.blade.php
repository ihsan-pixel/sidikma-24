<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SK Yayasan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Cambria";
      }
  
      * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
      }
  
      .page {
        width: 195mm;
        min-height: 280mm;
        padding: 8mm;
        margin: 0 auto; /* ✅ Hapus margin-top agar lebih mepet ke atas */
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        position: relative;
      }
  
      .center {
        text-align: center;
        margin-top: 0%;
      }
  
      .judul {
        font-size: 12pt;
        font-weight: bold;
        text-decoration: underline;
      }
  
      .subjudul {
        font-size: 12pt;
      }
  
      .section {
        margin-top: 0px;
      }
  
      .indent {
        text-indent: 25px;
      }
  
      .bold {
        font-weight: bold;
      }
  
      .ttd {
        margin-top: 0px;
        margin-left: 440px;
        text-align: left;
      }
  
      ul {
        list-style-type: none;
        padding-left: 0;
      }
  
      ul li::before {
        content: "- ";
      }
  
      @page {
        size: A4;
        margin: 0;
      }
  
      @media print {
        html, body {
            width: 210mm;
            height: 297mm;
            margin: 0;
            padding: 0;
        }

        .page {
            width: 210mm;
            height: 297mm;
            margin: 0; /* Bukan angka "5", harus satuan ukuran atau auto */
            padding: 11mm; /* Tambahkan padding kalau ingin konten tidak terlalu dempet */
            border: none;
            box-shadow: none;
            page-break-after: always;
        }
    }
      .surat-table {
          width: 100%;
          border-collapse: collapse;
      }
  
      .surat-table td {
          vertical-align: top;
          padding: 2px 0;
          line-height: 1.2;
          }
  
      .surat-table td * {
          margin: 0;
          padding: 0;
          line-height: 1.2;
          }
  
      .label {
          width: 100px;
      }
  
      .isi {
          text-align: justify;
      }
  
      .isi ol {
          margin: 0;
          padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div class="page">
      <div class="center">
          <img src="{{ asset('storage/images/logo/kop surat.png') }}"  style="width: 100%; max-width: 100%;">
      </div>   
  
      <div class="center section">
          <div class="judul">SURAT KEPUTUSAN KETUA LP MA’ARIF NU GUNUNGKIDUL</div>
          <div class="subjudul">Nomor: {{ $nomor }}</div>
          <p></p>
        </div>
        <table class="surat-table" style="width: 100%; border-collapse: collapse;">
          <tr>
              <td colspan="3" style="padding-bottom: 0px;">
                Ketua Lembaga Pendidikan Ma’arif NU Kabupaten Gunungkidul
              </td>
            </tr>
          <tr>
            <td style="width: 120px; vertical-align: top;">Menimbang</td>
            <td style="width: 10px;">:</td>
            <td class="isi">
              Bahwa demi meningkatkan kualitas pelayanan pendidikan di @if ($kelas_id == 1)
                MI YAPPI Badongan
            @elseif ($kelas_id == 10)
                MI YAPPI Baleharjo
            @elseif ($kelas_id == 11)
                MI YAPPI Balong
            @elseif ($kelas_id == 12)
                MI YAPPI Banjaran
            @elseif ($kelas_id == 13)
                MI YAPPI Bansari
            @elseif ($kelas_id == 14)
                MI YAPPI Banyusoco
            @elseif ($kelas_id == 15)
                MI YAPPI Batusari
            @elseif ($kelas_id == 16)
                MI YAPPI Cekel
            @elseif ($kelas_id == 17)
                MI YAPPI Doga
            @elseif ($kelas_id == 18)
                MI YAPPI Dondong
            @elseif ($kelas_id == 19)
                MI YAPPI Gedad I
            @elseif ($kelas_id == 20)
                MI YAPPI Gedad II
            @elseif ($kelas_id == 21)
                MI YAPPI Gubukrubuh
            @elseif ($kelas_id == 22)
                MI YAPPI Kalangan
            @elseif ($kelas_id == 23)
                MI YAPPI Kalongan
            @elseif ($kelas_id == 24)
                MI YAPPI Karang
            @elseif ($kelas_id == 26)
                MI YAPPI Karangtritis
            @elseif ($kelas_id == 27)
                MI YAPPI Karangwetan
            @elseif ($kelas_id == 28)
                MI YAPPI Kedungwanglu
            @elseif ($kelas_id == 29)
                MI YAPPI Klepu
            @elseif ($kelas_id == 30)
                MI YAPPI Mulusan
            @elseif ($kelas_id == 31)
                MI YAPPI Natah
            @elseif ($kelas_id == 32)
                MI YAPPI Ngembes
            @elseif ($kelas_id == 33)
                MI YAPPI Nglebeng
            @elseif ($kelas_id == 34)
                MI YAPPI Ngleri
            @elseif ($kelas_id == 35)
                MI YAPPI Ngrancang
            @elseif ($kelas_id == 36)
                MI YAPPI Ngunut
            @elseif ($kelas_id == 37)
                MI YAPPI Ngrati
            @elseif ($kelas_id == 38)
                MI YAPPI Nologaten
            @elseif ($kelas_id == 39)
                MI YAPPI Payak
            @elseif ($kelas_id == 40)
                MI YAPPI Peyuyon
            @elseif ($kelas_id == 41)
                MI YAPPI Pijenan
            @elseif ($kelas_id == 42)
                MI YAPPI Plalar
            @elseif ($kelas_id == 43)
                MI YAPPI Pucung
            @elseif ($kelas_id == 44)
                MI YAPPI Purwo
            @elseif ($kelas_id == 45)
                MI YAPPI Putat
            @elseif ($kelas_id == 46)
                MI YAPPI Randukuning
            @elseif ($kelas_id == 47)
                MI YAPPI Rejosari
            @elseif ($kelas_id == 48)
                MI YAPPI Ringintumpang
            @elseif ($kelas_id == 49)
                MI YAPPI Sawahan
            @elseif ($kelas_id == 50)
                MI YAPPI Semoyo
            @elseif ($kelas_id == 51)
                MI YAPPI Sendang
            @elseif ($kelas_id == 52)
                MI YAPPI Tambakromo
            @elseif ($kelas_id == 53)
                MI YAPPI Tanjung
            @elseif ($kelas_id == 54)
                MI YAPPI Tegalweru
            @elseif ($kelas_id == 55)
                MI YAPPI Tekik
            @elseif ($kelas_id == 57)
                MI YAPPI Tobong
            @elseif ($kelas_id == 58)
                MI YAPPI Wiyoko
            @elseif ($kelas_id == 60)
                MI Maarif Mulo 
            @elseif ($kelas_id == 62)
                MI Maarif Wareng
            @elseif ($kelas_id == 63)
                MI Wasathiyah
            @elseif ($kelas_id == 65)
                MTs YAPPI Dengok
            @elseif ($kelas_id == 66)
                MTs YAPPI Jetis
            @elseif ($kelas_id == 67)
                MTs YAPPI Kenteng
            @elseif ($kelas_id == 68)
                MTs YAPPI Mulusan
            @elseif ($kelas_id == 70)
                MTs YAPPI Sumberjo
            @elseif ($kelas_id == 71)
                MTs Jamul Muawanah
            @elseif ($kelas_id == 72)
                SMP Persiapan Semanu
            @elseif ($kelas_id == 74)
                SMP Pembangunan I Karangmojo
            @elseif ($kelas_id == 75)
                SMP Pembangunan Ponjong
            @elseif ($kelas_id == 76)
                SMP Pembangunan Semin
            @endif, maka dipandang perlu mengangkat Guru Tetap yang memenuhi kualifikasi;<br>
              Bahwa Guru tersebut di bawah ini memenuhi syarat untuk diangkat sebagai Guru Tetap di LP. Ma’arif NU PCNU Gunungkidul untuk @if ($kelas_id == 1)
              MI YAPPI Badongan
          @elseif ($kelas_id == 10)
              MI YAPPI Baleharjo
          @elseif ($kelas_id == 11)
              MI YAPPI Balong
          @elseif ($kelas_id == 12)
              MI YAPPI Banjaran
          @elseif ($kelas_id == 13)
              MI YAPPI Bansari
          @elseif ($kelas_id == 14)
              MI YAPPI Banyusoco
          @elseif ($kelas_id == 15)
              MI YAPPI Batusari
          @elseif ($kelas_id == 16)
              MI YAPPI Cekel
          @elseif ($kelas_id == 17)
              MI YAPPI Doga
          @elseif ($kelas_id == 18)
              MI YAPPI Dondong
          @elseif ($kelas_id == 19)
              MI YAPPI Gedad I
          @elseif ($kelas_id == 20)
              MI YAPPI Gedad II
          @elseif ($kelas_id == 21)
              MI YAPPI Gubukrubuh
          @elseif ($kelas_id == 22)
              MI YAPPI Kalangan
          @elseif ($kelas_id == 23)
              MI YAPPI Kalongan
          @elseif ($kelas_id == 24)
              MI YAPPI Karang
          @elseif ($kelas_id == 26)
              MI YAPPI Karangtritis
          @elseif ($kelas_id == 27)
              MI YAPPI Karangwetan
          @elseif ($kelas_id == 28)
              MI YAPPI Kedungwanglu
          @elseif ($kelas_id == 29)
              MI YAPPI Klepu
          @elseif ($kelas_id == 30)
              MI YAPPI Mulusan
          @elseif ($kelas_id == 31)
              MI YAPPI Natah
          @elseif ($kelas_id == 32)
              MI YAPPI Ngembes
          @elseif ($kelas_id == 33)
              MI YAPPI Nglebeng
          @elseif ($kelas_id == 34)
              MI YAPPI Ngleri
          @elseif ($kelas_id == 35)
              MI YAPPI Ngrancang
          @elseif ($kelas_id == 36)
              MI YAPPI Ngunut
          @elseif ($kelas_id == 37)
              MI YAPPI Ngrati
          @elseif ($kelas_id == 38)
              MI YAPPI Nologaten
          @elseif ($kelas_id == 39)
              MI YAPPI Payak
          @elseif ($kelas_id == 40)
              MI YAPPI Peyuyon
          @elseif ($kelas_id == 41)
              MI YAPPI Pijenan
          @elseif ($kelas_id == 42)
              MI YAPPI Plalar
          @elseif ($kelas_id == 43)
              MI YAPPI Pucung
          @elseif ($kelas_id == 44)
              MI YAPPI Purwo
          @elseif ($kelas_id == 45)
              MI YAPPI Putat
          @elseif ($kelas_id == 46)
              MI YAPPI Randukuning
          @elseif ($kelas_id == 47)
              MI YAPPI Rejosari
          @elseif ($kelas_id == 48)
              MI YAPPI Ringintumpang
          @elseif ($kelas_id == 49)
              MI YAPPI Sawahan
          @elseif ($kelas_id == 50)
              MI YAPPI Semoyo
          @elseif ($kelas_id == 51)
              MI YAPPI Sendang
          @elseif ($kelas_id == 52)
              MI YAPPI Tambakromo
          @elseif ($kelas_id == 53)
              MI YAPPI Tanjung
          @elseif ($kelas_id == 54)
              MI YAPPI Tegalweru
          @elseif ($kelas_id == 55)
              MI YAPPI Tekik
          @elseif ($kelas_id == 57)
              MI YAPPI Tobong
          @elseif ($kelas_id == 58)
              MI YAPPI Wiyoko
          @elseif ($kelas_id == 60)
              MI Maarif Mulo 
          @elseif ($kelas_id == 62)
              MI Maarif Wareng
          @elseif ($kelas_id == 63)
              MI Wasathiyah
          @elseif ($kelas_id == 65)
              MTs YAPPI Dengok
          @elseif ($kelas_id == 66)
              MTs YAPPI Jetis
          @elseif ($kelas_id == 67)
              MTs YAPPI Kenteng
          @elseif ($kelas_id == 68)
              MTs YAPPI Mulusan
          @elseif ($kelas_id == 70)
              MTs YAPPI Sumberjo
          @elseif ($kelas_id == 71)
              MTs Jamul Muawanah
          @elseif ($kelas_id == 72)
              SMP Persiapan Semanu
          @elseif ($kelas_id == 74)
              SMP Pembangunan I Karangmojo
          @elseif ($kelas_id == 75)
              SMP Pembangunan Ponjong
          @elseif ($kelas_id == 76)
              SMP Pembangunan Semin
          @endif, sesuai dengan kualifikasi tersebut;
            </td>
          </tr>
          <tr>
            <td style="vertical-align: top;">Mengingat</td>
            <td>:</td>
            <td>
              <ol type="1" style="margin: 0; padding-left: 20px;">
                <li>Undang-undang Nomor 20 Tahun 2003 Tentang Sisdiknas;</li>
                <li>Pedoman Penyelenggaraan LP Ma’arif NU DIY No 01 Tahun 2023;</li>
                <li>Aturan Kepegawaian LP. Ma’arif NU DIY No 04 Tahun 2023;</li>
              </ol>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: top;">Memperhatikan</td>
            <td>:</td>
            <td class="isi">
              Bahwa tenaga pendidik berikut, berstatus aktif di  @if ($kelas_id == 1)
              MI YAPPI Badongan
          @elseif ($kelas_id == 10)
              MI YAPPI Baleharjo
          @elseif ($kelas_id == 11)
              MI YAPPI Balong
          @elseif ($kelas_id == 12)
              MI YAPPI Banjaran
          @elseif ($kelas_id == 13)
              MI YAPPI Bansari
          @elseif ($kelas_id == 14)
              MI YAPPI Banyusoco
          @elseif ($kelas_id == 15)
              MI YAPPI Batusari
          @elseif ($kelas_id == 16)
              MI YAPPI Cekel
          @elseif ($kelas_id == 17)
              MI YAPPI Doga
          @elseif ($kelas_id == 18)
              MI YAPPI Dondong
          @elseif ($kelas_id == 19)
              MI YAPPI Gedad I
          @elseif ($kelas_id == 20)
              MI YAPPI Gedad II
          @elseif ($kelas_id == 21)
              MI YAPPI Gubukrubuh
          @elseif ($kelas_id == 22)
              MI YAPPI Kalangan
          @elseif ($kelas_id == 23)
              MI YAPPI Kalongan
          @elseif ($kelas_id == 24)
              MI YAPPI Karang
          @elseif ($kelas_id == 26)
              MI YAPPI Karangtritis
          @elseif ($kelas_id == 27)
              MI YAPPI Karangwetan
          @elseif ($kelas_id == 28)
              MI YAPPI Kedungwanglu
          @elseif ($kelas_id == 29)
              MI YAPPI Klepu
          @elseif ($kelas_id == 30)
              MI YAPPI Mulusan
          @elseif ($kelas_id == 31)
              MI YAPPI Natah
          @elseif ($kelas_id == 32)
              MI YAPPI Ngembes
          @elseif ($kelas_id == 33)
              MI YAPPI Nglebeng
          @elseif ($kelas_id == 34)
              MI YAPPI Ngleri
          @elseif ($kelas_id == 35)
              MI YAPPI Ngrancang
          @elseif ($kelas_id == 36)
              MI YAPPI Ngunut
          @elseif ($kelas_id == 37)
              MI YAPPI Ngrati
          @elseif ($kelas_id == 38)
              MI YAPPI Nologaten
          @elseif ($kelas_id == 39)
              MI YAPPI Payak
          @elseif ($kelas_id == 40)
              MI YAPPI Peyuyon
          @elseif ($kelas_id == 41)
              MI YAPPI Pijenan
          @elseif ($kelas_id == 42)
              MI YAPPI Plalar
          @elseif ($kelas_id == 43)
              MI YAPPI Pucung
          @elseif ($kelas_id == 44)
              MI YAPPI Purwo
          @elseif ($kelas_id == 45)
              MI YAPPI Putat
          @elseif ($kelas_id == 46)
              MI YAPPI Randukuning
          @elseif ($kelas_id == 47)
              MI YAPPI Rejosari
          @elseif ($kelas_id == 48)
              MI YAPPI Ringintumpang
          @elseif ($kelas_id == 49)
              MI YAPPI Sawahan
          @elseif ($kelas_id == 50)
              MI YAPPI Semoyo
          @elseif ($kelas_id == 51)
              MI YAPPI Sendang
          @elseif ($kelas_id == 52)
              MI YAPPI Tambakromo
          @elseif ($kelas_id == 53)
              MI YAPPI Tanjung
          @elseif ($kelas_id == 54)
              MI YAPPI Tegalweru
          @elseif ($kelas_id == 55)
              MI YAPPI Tekik
          @elseif ($kelas_id == 57)
              MI YAPPI Tobong
          @elseif ($kelas_id == 58)
              MI YAPPI Wiyoko
          @elseif ($kelas_id == 60)
              MI Maarif Mulo 
          @elseif ($kelas_id == 62)
              MI Maarif Wareng
          @elseif ($kelas_id == 63)
              MI Wasathiyah
          @elseif ($kelas_id == 65)
              MTs YAPPI Dengok
          @elseif ($kelas_id == 66)
              MTs YAPPI Jetis
          @elseif ($kelas_id == 67)
              MTs YAPPI Kenteng
          @elseif ($kelas_id == 68)
              MTs YAPPI Mulusan
          @elseif ($kelas_id == 70)
              MTs YAPPI Sumberjo
          @elseif ($kelas_id == 71)
              MTs Jamul Muawanah
          @elseif ($kelas_id == 72)
              SMP Persiapan Semanu
          @elseif ($kelas_id == 74)
              SMP Pembangunan I Karangmojo
          @elseif ($kelas_id == 75)
              SMP Pembangunan Ponjong
          @elseif ($kelas_id == 76)
              SMP Pembangunan Semin
          @endif sesuai dengan verifikasi data di Aplikasi SiDIKMa-GK pada tahun ditetapkannya keputusan ini;
            </td>
          </tr>
        </table>
        
        <div class="section center bold" style="margin-top: 0px;">MEMUTUSKAN</div>
        
        <table class="surat-table" style="width: 100%; border-collapse: collapse;">
          <tr>
              <td style="width: 120px; vertical-align: top;">Menetapkan</td>
              <td style="width: 10px;">:</td>
              <td></td>
            </tr>
            <tr>
              <td style="vertical-align: top;">Pertama</td>
              <td>:</td>
              <td>Guru tersebut di bawah ini</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
              <table style="width: 100%; border-collapse: collapse;">
                  <tr>
                    <td style="width: 220px; padding: 0px 0; line-height: 1.2;">1. Nama</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: {{ $nama_lengkap }}</td>
                  </tr>
                  <tr>
                    <td style="padding: 0px 0; line-height: 1.2;">2. Tempat, tanggal lahir</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: {{ $tempat_lahir }}, {{ \Carbon\Carbon::parse($tgl_lahir)->translatedFormat('d F Y') }}</td>
                  </tr>
                  <tr>
                    <td style="padding: 0px 0; line-height: 1.2;">3. NUPTK/NPK</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: {{ $nuptk }}</td>
                  </tr>
                  <tr>
                    <td style="padding: 0px 0; line-height: 1.2;">4. EWANUGK/KARTANU</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: {{ $nis }}</td>
                  </tr>
                  <tr>
                    <td style="padding: 0px 0; line-height: 1.2;">5. TMT Pertama</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: {{ \Carbon\Carbon::parse($tmt)->translatedFormat('d F Y') }}</td>
                  </tr>
                  <tr>
                    <td style="padding: 0px 0; line-height: 1.2;">6. Pendidikan, tahun lulus</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: {{ $ptt_lulus }}</td>
                  </tr>
                  <tr>
                    <td style="padding: 0px 0; line-height: 1.2;">7. Program Studi</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: {{ $p_studi }}</td>
                  </tr>
                  <tr>
                    <td style="padding: 0px 0; line-height: 1.2;">8. Status Kepegawaian</td>
                    <td style="padding: 0px 0; line-height: 1.2;">: @if ($jurusan_id == 1)
                        Guru Tetap Yayasan
                    @elseif ($jurusan_id == 2)
                        GTY Sertifikasi inpassing
                    @elseif ($jurusan_id == 3)
                        GTY Sertifikasi Non Inpassing
                    @elseif ($jurusan_id == 4)
                        Guru Tidak Tetap
                    @elseif ($jurusan_id == 5)
                        PNS Sertifikasi
                    @elseif ($jurusan_id == 6)
                        Pegawai Tetap Yayasan
                    @elseif ($jurusan_id == 7)
                        Pegawai Tidak Tetap
                    @elseif ($jurusan_id == 8)
                    PNS Non Sertifikasi
                    @endif</td>
                  </tr>
              </table>                  
              </td>
            </tr>
            <tr>
              <td style="vertical-align: top;"></td>
              <td></td>
              <td style="line-height: 1.4;" class="isi">
                Diangkat kembali sebagai Tenaga Pendidik LP. Ma'arif NU PCNU Gunungkidul untuk @if ($kelas_id == 1)
                MI YAPPI Badongan
            @elseif ($kelas_id == 10)
                MI YAPPI Baleharjo
            @elseif ($kelas_id == 11)
                MI YAPPI Balong
            @elseif ($kelas_id == 12)
                MI YAPPI Banjaran
            @elseif ($kelas_id == 13)
                MI YAPPI Bansari
            @elseif ($kelas_id == 14)
                MI YAPPI Banyusoco
            @elseif ($kelas_id == 15)
                MI YAPPI Batusari
            @elseif ($kelas_id == 16)
                MI YAPPI Cekel
            @elseif ($kelas_id == 17)
                MI YAPPI Doga
            @elseif ($kelas_id == 18)
                MI YAPPI Dondong
            @elseif ($kelas_id == 19)
                MI YAPPI Gedad I
            @elseif ($kelas_id == 20)
                MI YAPPI Gedad II
            @elseif ($kelas_id == 21)
                MI YAPPI Gubukrubuh
            @elseif ($kelas_id == 22)
                MI YAPPI Kalangan
            @elseif ($kelas_id == 23)
                MI YAPPI Kalongan
            @elseif ($kelas_id == 24)
                MI YAPPI Karang
            @elseif ($kelas_id == 26)
                MI YAPPI Karangtritis
            @elseif ($kelas_id == 27)
                MI YAPPI Karangwetan
            @elseif ($kelas_id == 28)
                MI YAPPI Kedungwanglu
            @elseif ($kelas_id == 29)
                MI YAPPI Klepu
            @elseif ($kelas_id == 30)
                MI YAPPI Mulusan
            @elseif ($kelas_id == 31)
                MI YAPPI Natah
            @elseif ($kelas_id == 32)
                MI YAPPI Ngembes
            @elseif ($kelas_id == 33)
                MI YAPPI Nglebeng
            @elseif ($kelas_id == 34)
                MI YAPPI Ngleri
            @elseif ($kelas_id == 35)
                MI YAPPI Ngrancang
            @elseif ($kelas_id == 36)
                MI YAPPI Ngunut
            @elseif ($kelas_id == 37)
                MI YAPPI Ngrati
            @elseif ($kelas_id == 38)
                MI YAPPI Nologaten
            @elseif ($kelas_id == 39)
                MI YAPPI Payak
            @elseif ($kelas_id == 40)
                MI YAPPI Peyuyon
            @elseif ($kelas_id == 41)
                MI YAPPI Pijenan
            @elseif ($kelas_id == 42)
                MI YAPPI Plalar
            @elseif ($kelas_id == 43)
                MI YAPPI Pucung
            @elseif ($kelas_id == 44)
                MI YAPPI Purwo
            @elseif ($kelas_id == 45)
                MI YAPPI Putat
            @elseif ($kelas_id == 46)
                MI YAPPI Randukuning
            @elseif ($kelas_id == 47)
                MI YAPPI Rejosari
            @elseif ($kelas_id == 48)
                MI YAPPI Ringintumpang
            @elseif ($kelas_id == 49)
                MI YAPPI Sawahan
            @elseif ($kelas_id == 50)
                MI YAPPI Semoyo
            @elseif ($kelas_id == 51)
                MI YAPPI Sendang
            @elseif ($kelas_id == 52)
                MI YAPPI Tambakromo
            @elseif ($kelas_id == 53)
                MI YAPPI Tanjung
            @elseif ($kelas_id == 54)
                MI YAPPI Tegalweru
            @elseif ($kelas_id == 55)
                MI YAPPI Tekik
            @elseif ($kelas_id == 57)
                MI YAPPI Tobong
            @elseif ($kelas_id == 58)
                MI YAPPI Wiyoko
            @elseif ($kelas_id == 60)
                MI Maarif Mulo 
            @elseif ($kelas_id == 62)
                MI Maarif Wareng
            @elseif ($kelas_id == 63)
                MI Wasathiyah
            @elseif ($kelas_id == 65)
                MTs YAPPI Dengok
            @elseif ($kelas_id == 66)
                MTs YAPPI Jetis
            @elseif ($kelas_id == 67)
                MTs YAPPI Kenteng
            @elseif ($kelas_id == 68)
                MTs YAPPI Mulusan
            @elseif ($kelas_id == 70)
                MTs YAPPI Sumberjo
            @elseif ($kelas_id == 71)
                MTs Jamul Muawanah
            @elseif ($kelas_id == 72)
                SMP Persiapan Semanu
            @elseif ($kelas_id == 74)
                SMP Pembangunan I Karangmojo
            @elseif ($kelas_id == 75)
                SMP Pembangunan Ponjong
            @elseif ($kelas_id == 76)
                SMP Pembangunan Semin
            @endif tahun pelajaran  dengan ketugasan @if ($ketugasan == 1)
            Mengajar Guru Kelas
            @elseif ($ketugasan == 2)
            Mengajar Guru Fikih
            @elseif ($ketugasan == 3)
            Mengajar PAI
            @elseif ($ketugasan == 4)
            Mengajar Mapel Bahasa Arab
            @elseif ($ketugasan == 5)
            Mengajar Mapel Akidah Akhlak
            @elseif ($ketugasan == 6)
            Mengajar Mapel Qu'an Hadis
            @elseif ($ketugasan == 7)
            Mengajar Mapel Matematika
            @elseif ($ketugasan == 8)
            Mengajar Mapel Bahasa Indonesia
            @elseif ($ketugasan == 9)
            Mengajar Mapel SKI
            @elseif ($ketugasan == 10)
            Mengajar PJOK
            @elseif ($ketugasan == 1)
            Mengajar Bahasa Jawa
            @elseif ($ketugasan == 12)
            Mengajar Mapel Bahasa Inggris
            @elseif ($ketugasan == 13)
            Mengajar Mapel IPA
            @elseif ($ketugasan == 14)
            Mengajar Mapel IPS
            @elseif ($ketugasan == 15)
            Mengajar Mapel PKN
            @elseif ($ketugasan == 16)
            Mengajar Mapel SBK
            @elseif ($ketugasan == 17)
            Tenaga Administrasi
            @elseif ($ketugasan == 18)
            Kepala Madrasah/Sekolah
            @elseif ($ketugasan == 19)
            Penjaga Sekolah/Madrasah
            @elseif ($ketugasan == 20)
            Mengajar TIK/Prakarya
            @elseif ($ketugasan == 21)
            Mengajar Guru BK
            @elseif ($ketugasan == 22)
            Mengajar Ke NU an
            @endif , dan kepadanya diberikan gaji pokok serta tunjangan lain yang berlaku di
            @if ($kelas_id == 1)
            MI YAPPI Badongan
        @elseif ($kelas_id == 10)
            MI YAPPI Baleharjo
        @elseif ($kelas_id == 11)
            MI YAPPI Balong
        @elseif ($kelas_id == 12)
            MI YAPPI Banjaran
        @elseif ($kelas_id == 13)
            MI YAPPI Bansari
        @elseif ($kelas_id == 14)
            MI YAPPI Banyusoco
        @elseif ($kelas_id == 15)
            MI YAPPI Batusari
        @elseif ($kelas_id == 16)
            MI YAPPI Cekel
        @elseif ($kelas_id == 17)
            MI YAPPI Doga
        @elseif ($kelas_id == 18)
            MI YAPPI Dondong
        @elseif ($kelas_id == 19)
            MI YAPPI Gedad I
        @elseif ($kelas_id == 20)
            MI YAPPI Gedad II
        @elseif ($kelas_id == 21)
            MI YAPPI Gubukrubuh
        @elseif ($kelas_id == 22)
            MI YAPPI Kalangan
        @elseif ($kelas_id == 23)
            MI YAPPI Kalongan
        @elseif ($kelas_id == 24)
            MI YAPPI Karang
        @elseif ($kelas_id == 26)
            MI YAPPI Karangtritis
        @elseif ($kelas_id == 27)
            MI YAPPI Karangwetan
        @elseif ($kelas_id == 28)
            MI YAPPI Kedungwanglu
        @elseif ($kelas_id == 29)
            MI YAPPI Klepu
        @elseif ($kelas_id == 30)
            MI YAPPI Mulusan
        @elseif ($kelas_id == 31)
            MI YAPPI Natah
        @elseif ($kelas_id == 32)
            MI YAPPI Ngembes
        @elseif ($kelas_id == 33)
            MI YAPPI Nglebeng
        @elseif ($kelas_id == 34)
            MI YAPPI Ngleri
        @elseif ($kelas_id == 35)
            MI YAPPI Ngrancang
        @elseif ($kelas_id == 36)
            MI YAPPI Ngunut
        @elseif ($kelas_id == 37)
            MI YAPPI Ngrati
        @elseif ($kelas_id == 38)
            MI YAPPI Nologaten
        @elseif ($kelas_id == 39)
            MI YAPPI Payak
        @elseif ($kelas_id == 40)
            MI YAPPI Peyuyon
        @elseif ($kelas_id == 41)
            MI YAPPI Pijenan
        @elseif ($kelas_id == 42)
            MI YAPPI Plalar
        @elseif ($kelas_id == 43)
            MI YAPPI Pucung
        @elseif ($kelas_id == 44)
            MI YAPPI Purwo
        @elseif ($kelas_id == 45)
            MI YAPPI Putat
        @elseif ($kelas_id == 46)
            MI YAPPI Randukuning
        @elseif ($kelas_id == 47)
            MI YAPPI Rejosari
        @elseif ($kelas_id == 48)
            MI YAPPI Ringintumpang
        @elseif ($kelas_id == 49)
            MI YAPPI Sawahan
        @elseif ($kelas_id == 50)
            MI YAPPI Semoyo
        @elseif ($kelas_id == 51)
            MI YAPPI Sendang
        @elseif ($kelas_id == 52)
            MI YAPPI Tambakromo
        @elseif ($kelas_id == 53)
            MI YAPPI Tanjung
        @elseif ($kelas_id == 54)
            MI YAPPI Tegalweru
        @elseif ($kelas_id == 55)
            MI YAPPI Tekik
        @elseif ($kelas_id == 57)
            MI YAPPI Tobong
        @elseif ($kelas_id == 58)
            MI YAPPI Wiyoko
        @elseif ($kelas_id == 60)
            MI Maarif Mulo 
        @elseif ($kelas_id == 62)
            MI Maarif Wareng
        @elseif ($kelas_id == 63)
            MI Wasathiyah
        @elseif ($kelas_id == 65)
            MTs YAPPI Dengok
        @elseif ($kelas_id == 66)
            MTs YAPPI Jetis
        @elseif ($kelas_id == 67)
            MTs YAPPI Kenteng
        @elseif ($kelas_id == 68)
            MTs YAPPI Mulusan
        @elseif ($kelas_id == 70)
            MTs YAPPI Sumberjo
        @elseif ($kelas_id == 71)
            MTs Jamul Muawanah
        @elseif ($kelas_id == 72)
            SMP Persiapan Semanu
        @elseif ($kelas_id == 74)
            SMP Pembangunan I Karangmojo
        @elseif ($kelas_id == 75)
            SMP Pembangunan Ponjong
        @elseif ($kelas_id == 76)
            SMP Pembangunan Semin
        @endif.              
              </td>
            </tr>          
          <tr>
            <td style="vertical-align: top;">Kedua</td>
            <td>:</td>
            <td class="isi">Keputusan ini berlaku terhitung mulai tanggal 1 Juli 2025 sampai dengan 30 Juni 2026, dan apabila di kemudian hari terdapat kekeliruan di dalamnya, akan diadakan perbaikan dan perhitungan kembali sebagaimana mestinya.</td>
          </tr>
          <tr>
            <td style="vertical-align: top;">Ketiga</td>
            <td>:</td>
            <td>Asli Surat Keputusan ini diberikan kepada yang bersangkutan.</td>
          </tr>
        </table>
      
      <div class="ttd">
      <table>
          <tr>
              <td style="width: 100px;">Ditetapkan di</td>
              <td style="width: 10px;">:</td>
              <td>Gunungkidul</td>
          </tr>
          <tr>
              <td style="width: 100px;">Pada Tanggal</td>
              <td style="width: 10px;">:</td>
              <td>30 Juni 2025</td>
          </tr>
      </table>
      <table>
          <tr>
              <td>Pengurus LP Ma’arif NU Kab. Gunungkidul</td>
          </tr>
          <tr>
              <td>Ketua,<br><br><br><br></td>
          </tr>
          <tr>
              <td class="bold">Drs. H. SANGKIN, M.Pd.</td>
          </tr>
      </table>
      </div>
  
      <table>
          <tr>
              <td>Tembusan Yth:</td>
          </tr>
          <tr>
              <td>1. Kepala {{ $tembusan }}</td>
          </tr>
          <tr>
              <td>2. Kepala @if ($kelas_id == 1)
                MI YAPPI Badongan
            @elseif ($kelas_id == 10)
                MI YAPPI Baleharjo
            @elseif ($kelas_id == 11)
                MI YAPPI Balong
            @elseif ($kelas_id == 12)
                MI YAPPI Banjaran
            @elseif ($kelas_id == 13)
                MI YAPPI Bansari
            @elseif ($kelas_id == 14)
                MI YAPPI Banyusoco
            @elseif ($kelas_id == 15)
                MI YAPPI Batusari
            @elseif ($kelas_id == 16)
                MI YAPPI Cekel
            @elseif ($kelas_id == 17)
                MI YAPPI Doga
            @elseif ($kelas_id == 18)
                MI YAPPI Dondong
            @elseif ($kelas_id == 19)
                MI YAPPI Gedad I
            @elseif ($kelas_id == 20)
                MI YAPPI Gedad II
            @elseif ($kelas_id == 21)
                MI YAPPI Gubukrubuh
            @elseif ($kelas_id == 22)
                MI YAPPI Kalangan
            @elseif ($kelas_id == 23)
                MI YAPPI Kalongan
            @elseif ($kelas_id == 24)
                MI YAPPI Karang
            @elseif ($kelas_id == 26)
                MI YAPPI Karangtritis
            @elseif ($kelas_id == 27)
                MI YAPPI Karangwetan
            @elseif ($kelas_id == 28)
                MI YAPPI Kedungwanglu
            @elseif ($kelas_id == 29)
                MI YAPPI Klepu
            @elseif ($kelas_id == 30)
                MI YAPPI Mulusan
            @elseif ($kelas_id == 31)
                MI YAPPI Natah
            @elseif ($kelas_id == 32)
                MI YAPPI Ngembes
            @elseif ($kelas_id == 33)
                MI YAPPI Nglebeng
            @elseif ($kelas_id == 34)
                MI YAPPI Ngleri
            @elseif ($kelas_id == 35)
                MI YAPPI Ngrancang
            @elseif ($kelas_id == 36)
                MI YAPPI Ngunut
            @elseif ($kelas_id == 37)
                MI YAPPI Ngrati
            @elseif ($kelas_id == 38)
                MI YAPPI Nologaten
            @elseif ($kelas_id == 39)
                MI YAPPI Payak
            @elseif ($kelas_id == 40)
                MI YAPPI Peyuyon
            @elseif ($kelas_id == 41)
                MI YAPPI Pijenan
            @elseif ($kelas_id == 42)
                MI YAPPI Plalar
            @elseif ($kelas_id == 43)
                MI YAPPI Pucung
            @elseif ($kelas_id == 44)
                MI YAPPI Purwo
            @elseif ($kelas_id == 45)
                MI YAPPI Putat
            @elseif ($kelas_id == 46)
                MI YAPPI Randukuning
            @elseif ($kelas_id == 47)
                MI YAPPI Rejosari
            @elseif ($kelas_id == 48)
                MI YAPPI Ringintumpang
            @elseif ($kelas_id == 49)
                MI YAPPI Sawahan
            @elseif ($kelas_id == 50)
                MI YAPPI Semoyo
            @elseif ($kelas_id == 51)
                MI YAPPI Sendang
            @elseif ($kelas_id == 52)
                MI YAPPI Tambakromo
            @elseif ($kelas_id == 53)
                MI YAPPI Tanjung
            @elseif ($kelas_id == 54)
                MI YAPPI Tegalweru
            @elseif ($kelas_id == 55)
                MI YAPPI Tekik
            @elseif ($kelas_id == 57)
                MI YAPPI Tobong
            @elseif ($kelas_id == 58)
                MI YAPPI Wiyoko
            @elseif ($kelas_id == 60)
                MI Maarif Mulo 
            @elseif ($kelas_id == 62)
                MI Maarif Wareng
            @elseif ($kelas_id == 63)
                MI Wasathiyah
            @elseif ($kelas_id == 65)
                MTs YAPPI Dengok
            @elseif ($kelas_id == 66)
                MTs YAPPI Jetis
            @elseif ($kelas_id == 67)
                MTs YAPPI Kenteng
            @elseif ($kelas_id == 68)
                MTs YAPPI Mulusan
            @elseif ($kelas_id == 70)
                MTs YAPPI Sumberjo
            @elseif ($kelas_id == 71)
                MTs Jamul Muawanah
            @elseif ($kelas_id == 72)
                SMP Persiapan Semanu
            @elseif ($kelas_id == 74)
                SMP Pembangunan I Karangmojo
            @elseif ($kelas_id == 75)
                SMP Pembangunan Ponjong
            @elseif ($kelas_id == 76)
                SMP Pembangunan Semin
            @endif</td>
          </tr>
          <tr>
              <td>3. Arsip</td>
          </tr>
      </table>
    </div>
  </body>
</html>