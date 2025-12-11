@extends('backend.layout.base')

@section('content')
<div class="container-fluid px-4" style="max-width: 100%;">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 2rem"><b>{{ $title }}</b></h5>
                </div>

                <!--/ Conversion rate -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped w-100" style="min-width: 600px;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Madrasah/Sekolah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php $no = 1; @endphp
                                @foreach ($datasekolah as $rp)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $rp->nama_lengkap }}</td>
                                        <td>
                                            <a href="/dashboard/open/{{ $rp->id }}" class="btn btn-primary">View Profile</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /table-responsive -->
                </div> <!-- /card-body -->
            </div>
        </div>
    </div>
</div>
@endsection
