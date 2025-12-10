@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-mb">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="font-size: 40px">{{ $title }}</h5>
                </div>
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-body">
                                <small class="text-muted text-uppercase">File SK Yayasan</small>
                            <ul class="list-unstyled mt-3 mb-0">
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span
                                        class="fw-semibold mx-2">Tahun 2025 :</span> <a href="{{ asset('') }}storage/dokumen/sk01_2025/{{ request()->user()->sk01_2025 }}"><button class="btn btn-success">Download</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
