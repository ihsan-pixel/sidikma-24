@extends('backend.layout.base')

@section('content')
<div class="row">
    <div class="col-mb">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0" style="font-size: 40px"><b>{{ $title }}</b></h5>
            </div>
            <!--/ Conversion rate -->
            <div class="row">
                <div class="col-md-12 col-lg-12 mb-4 mb-md-0">
                    <!-- Ganti container jadi fluid agar full width -->
                    <div class="container-fluid px-4 mt-4">
                        <table id="datatable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Asal Madrasah/Sekolah</th>
                                    <th class="text-center">Details</th>
                                </tr>
                            </thead> 
                            <tbody class="table-border-bottom-0">
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($datasekolah as $rp)
                                    <tr>
                                        <td width="auto">{{ $no++ }}</td>
                                        <td>{{ $rp->nama_lengkap }}</td>
                                        <td width="auto" class="text-center">
                                            <a href="/invoice/add/{{ $rp->id }}" type="button" class="btn btn-primary">view Invoice</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
