@extends('backend.layout.base')

@section('content')
<div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card shadow-sm">

            {{-- HEADER --}}
            <div class="card-body border-bottom">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-0 fw-bold">INVOICE PEMBAYARAN</h3>
                        <small class="text-muted">
                            LP. Ma'arif NU PCNU Gunungkidul
                        </small>
                    </div>
                    <div class="col-md-4 text-end">
                        <span class="badge bg-primary fs-6">
                            Tahun Pelajaran 2024/2025
                        </span>
                    </div>
                </div>
            </div>

            {{-- INFO INVOICE --}}
            <div class="card-body border-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td width="140">Nama Madrasah</td>
                                <td>:</td>
                                <td><b>MI Ma'arif Wonosari</b></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>Gunungkidul</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td width="140">No Invoice</td>
                                <td>:</td>
                                <td>INV-2024-001</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>{{ now()->format('d M Y') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            {{-- TABEL RINCIAN --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th width="50">No</th>
                                <th>Uraian</th>
                                <th width="100">Satuan</th>
                                <th width="130">Nominal</th>
                                <th width="100">Qty</th>
                                <th width="150">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Peserta Didik</td>
                                <td class="text-center">Orang</td>
                                <td class="text-end">Rp 1.000</td>
                                <td class="text-center">120</td>
                                <td class="text-end">Rp 720.000</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Guru ASN Sertifikasi</td>
                                <td class="text-center">Orang</td>
                                <td class="text-end">Rp 20.000</td>
                                <td class="text-center">5</td>
                                <td class="text-end">Rp 600.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5" class="text-end">Total</th>
                                <th class="text-end text-primary fs-5">
                                    Rp 1.320.000
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            {{-- CATATAN --}}
            <div class="card-body border-top">
                <p class="mb-1">
                    <b>Catatan:</b>
                </p>
                <ul class="mb-0">
                    <li>Pembayaran iuran dilakukan per semester.</li>
                    <li>Invoice ini sah tanpa tanda tangan.</li>
                </ul>
            </div>

            {{-- TANDA TANGAN --}}
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <p class="mb-5">
                            Gunungkidul, {{ now()->format('d M Y') }}
                        </p>
                        <p class="fw-bold mb-0">
                            Bendahara LP. Ma'arif NU
                        </p>
                    </div>
                </div>
            </div>

            {{-- ACTION --}}
            <div class="card-footer text-end">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">
                    Cetak Invoice
                </button>
            </div>

        </div>
    </div>
</div>
@endsection
