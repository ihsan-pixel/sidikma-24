<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $nama_lengkap }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .kop-surat {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            text-align: right;
            border-bottom: 3px solid black;
            padding-bottom: 10px;
        }

        .invoice-table th,
        .invoice-table td {
            text-align: center;
        }

        .total-row {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="kop-surat">
        <img src="{{ asset('storage/images/logo/logo sidikma gk.png') }}" 
             alt="Logo Sidikma" 
             style="width: 160px; height: 80px; object-fit: contain; margin-bottom: 10px;">
        
        <h2 style="margin: 0;">INVOICE PEMBAYARAN</h2>
        <p style="margin: 5px 0;">Tanggal: {{ $date }}</p>
    </div>

    <div style="line-height: 1.4; margin-bottom: 10px;">
        <div><strong>Nama:</strong> {{ $nama_lengkap }}</div>
        <div><strong>Asal Madrasah/Sekolah:</strong> 
            @if ($kelas_id == 1) MI YAPPI Badongan
            @elseif ($kelas_id == 10) MI YAPPI Baleharjo
            @elseif ($kelas_id == 11) MI YAPPI Balong
            @elseif ($kelas_id == 12) MI YAPPI Banjaran
            @elseif ($kelas_id == 13) MI YAPPI Bansari
            @elseif ($kelas_id == 14) MI YAPPI Banyusoco
            @elseif ($kelas_id == 15) MI YAPPI Batusari
            @elseif ($kelas_id == 16) MI YAPPI Cekel
            @elseif ($kelas_id == 17) MI YAPPI Doga
            @elseif ($kelas_id == 18) MI YAPPI Dondong
            @elseif ($kelas_id == 19) MI YAPPI Gedad I
            @elseif ($kelas_id == 20) MI YAPPI Gedad II
            @elseif ($kelas_id == 21) MI YAPPI Gubukrubuh
            @elseif ($kelas_id == 22) MI YAPPI Kalangan
            @elseif ($kelas_id == 23) MI YAPPI Kalongan
            @elseif ($kelas_id == 24) MI YAPPI Karang
            @elseif ($kelas_id == 26) MI YAPPI Karangtritis
            @elseif ($kelas_id == 27) MI YAPPI Karangwetan
            @elseif ($kelas_id == 28) MI YAPPI Kedungwanglu
            @elseif ($kelas_id == 29) MI YAPPI Klepu
            @elseif ($kelas_id == 30) MI YAPPI Mulusan
            @elseif ($kelas_id == 31) MI YAPPI Natah
            @elseif ($kelas_id == 32) MI YAPPI Ngembes
            @elseif ($kelas_id == 33) MI YAPPI Nglebeng
            @elseif ($kelas_id == 34) MI YAPPI Ngleri
            @elseif ($kelas_id == 35) MI YAPPI Ngrancang
            @elseif ($kelas_id == 36) MI YAPPI Ngunut
            @elseif ($kelas_id == 37) MI YAPPI Ngrati
            @elseif ($kelas_id == 38) MI YAPPI Nologaten
            @elseif ($kelas_id == 39) MI YAPPI Payak
            @elseif ($kelas_id == 40) MI YAPPI Peyuyon
            @elseif ($kelas_id == 41) MI YAPPI Pijenan
            @elseif ($kelas_id == 42) MI YAPPI Plalar
            @elseif ($kelas_id == 43) MI YAPPI Pucung
            @elseif ($kelas_id == 44) MI YAPPI Purwo
            @elseif ($kelas_id == 45) MI YAPPI Putat
            @elseif ($kelas_id == 46) MI YAPPI Randukuning
            @elseif ($kelas_id == 47) MI YAPPI Rejosari
            @elseif ($kelas_id == 48) MI YAPPI Ringintumpang
            @elseif ($kelas_id == 49) MI YAPPI Sawahan
            @elseif ($kelas_id == 50) MI YAPPI Semoyo
            @elseif ($kelas_id == 51) MI YAPPI Sendang
            @elseif ($kelas_id == 52) MI YAPPI Tambakromo
            @elseif ($kelas_id == 53) MI YAPPI Tanjung
            @elseif ($kelas_id == 54) MI YAPPI Tegalweru
            @elseif ($kelas_id == 55) MI YAPPI Tekik
            @elseif ($kelas_id == 57) MI YAPPI Tobong
            @elseif ($kelas_id == 58) MI YAPPI Wiyoko
            @elseif ($kelas_id == 60) MI Maarif Mulo 
            @elseif ($kelas_id == 62) MI Maarif Wareng
            @elseif ($kelas_id == 63) MI Wasathiyah
            @elseif ($kelas_id == 65) MTs YAPPI Dengok
            @elseif ($kelas_id == 66) MTs YAPPI Jetis
            @elseif ($kelas_id == 67) MTs YAPPI Kenteng
            @elseif ($kelas_id == 68) MTs YAPPI Mulusan
            @elseif ($kelas_id == 70) MTs YAPPI Sumberjo
            @elseif ($kelas_id == 71) MTs Jamul Muawanah
            @elseif ($kelas_id == 72) SMP Persiapan Semanu
            @elseif ($kelas_id == 74) SMP Pembangunan I Karangmojo
            @elseif ($kelas_id == 75) SMP Pembangunan Ponjong
            @elseif ($kelas_id == 76) SMP Pembangunan Semin
            @endif
        </div>
        <div><strong>Email:</strong> {{ $email }}</div>
        <div><strong>Alamat:</strong> {{ $alamat }}</div>
    </div>

    <table class="table table-striped invoice-table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Tahun</th>
                <th>Jenis Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($lainya as $u)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $u->tahun }}</td>
                    <td>{{ $u->pembayaran }}</td>
                    <td>
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

    <table class="table">
        <tfoot>
            <tr class="total-row">
                <th colspan="3" class="text-right">Total Keseluruhan</th>
                <th>
                    @if ($lainya->isEmpty())
                        Rp. 0
                    @else
                        Rp. {{ number_format($lainya->sum('nilai')) }}
                    @endif
                </th>
            </tr>
        </tfoot>
    </table>

    <p style="margin-top: 10px; font-style: italic;">
        *Apabila terdapat kendala dalam melakukan pembayaran, silakan menghubungi Admin LP. Ma'arif NU Gunungkidul.
    </p>
</body>

</html>