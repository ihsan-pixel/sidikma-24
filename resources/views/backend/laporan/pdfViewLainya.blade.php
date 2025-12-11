<!DOCTYPE html>
<html>

<head>
    <title>{{ $nama_lengkap }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
    <div class="kop-surat" style="display: flex; flex-direction: column; align-items: flex-end; text-align: right;">
        <img src="{{ asset('storage/images/logo/logo sidikma gk.png') }}" 
             alt="Logo Sidikma" 
             style="width: 160px; height: 80px; object-fit: contain; margin-bottom: 10px;">
        
        <div>
            <h2 style="margin: 0;">INVOICE PEMBAYARAN</h2>
            <p style="margin: 5px 0;">Tanggal: {{ $date }}</p>
        </div>
    </div>       
       
    <div style="display: table; line-height: 1.4; margin-bottom: 10px;">
        <div style="display: table-row;">
            <div style="display: table-cell; padding-right: 10px;">Nama</div>
            <div style="display: table-cell;">: {{ $nama_lengkap }}</div>
        </div>
        <div style="display: table-row;">
            <div style="display: table-cell; padding-right: 10px;">Asal Madrasah/Sekolah</div>
            <div style="display: table-cell;">: @if ($kelas_id == 1)
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
            @endif</div>
        </div>
        <div style="display: table-row;">
            <div style="display: table-cell; padding-right: 10px;">Email</div>
            <div style="display: table-cell;">: {{ $email }}</div>
        </div>
        <div style="display: table-row;">
            <div style="display: table-cell; padding-right: 10px;">Alamat</div>
            <div style="display: table-cell;">: {{ $alamat }}</div>
        </div>
    </div>

    <table id="data" class="table table-striped ">
        <thead>
            <tr>
                <th>NO</th>
                <th>Tahun</th>
                <th>Jenis Pembayaran</th>
                <th>Keterangan</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody style="font-size: 12px;">
            @php
                $no = 1;
            @endphp
            @foreach ($lainya as $u)
                <tr>
                    <td>{{ $no++ }}</td>

                    <td><?php echo $u->tahun; ?></td>
                    <td><?php echo $u->pembayaran; ?></td>
                    <td><?php echo $u->keterangan; ?></td>
                    {{-- <td>Rp. {{ number_format($u->nilai) }}</td> --}}
                    <td class="text-center">
                        @if ($u->status_payment == null)
                            Belum Lunas
                        @elseif ($u->status_payment == 'Pending')
                            Pending
                        @else
                            Lunas
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table>
        <tfoot>
            <tr>
                <th colspan="7" class="text-end">Total Keseluruhan</th>
                <th>@if ($u->status_payment == null)
                    Rp. 0
                @else
                    Rp. {{ number_format($u->nilai) }}
                @endif</th>
            </tr>
        </tfoot>
    </table>
    <p style="margin-top: 10px; font-style: italic;">
        *Apabila terdapat kendala dalam melakukan pembayaran, silakan menghubungi Admin LP. Ma'arif NU Gunungkidul.
    </p>    
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .kop-surat {
        display: flex;
        align-items: center;
        border-bottom: 3px solid black;
        padding-bottom: 10px;
    }
    .kop-surat img {
        width: 100px; /* Sesuaikan ukuran logo */
        height: auto;
        margin-right: 20px;
    }
    .kop-text {
        text-align: center;
        flex-grow: 1;
    }
    .kop-text h1 {
        margin: 0;
        font-size: 22px;
    }
    .kop-text p {
        margin: 2px 0;
        font-size: 14px;
    }
</style>
</html>