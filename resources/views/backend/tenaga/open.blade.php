@extends('backend.layout.base')

@section('content')
    <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-12 mt-n2" style="  margin-right: -7%;">
                    @if (request()->user()->image != null)
                        <img src="{{ asset('') }}storage/images/users/{{ request()->user()->image }}"
                            style="max-width: 30%;" alt="image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    @else
                        <img src="{{ asset('') }}storage/images/users/users.png" style="max-width: 50%;"
                            alt="image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    @endif
                </div>
                <div class="flex-grow-1 mt-5 mt-sm-5">
                    <div
                        class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info"
                            style="@if (request()->user()->image != null) margin-top: 60%;
                            margin-left: -125%; @else  margin-top: 5%; @endif">
                            <h4>{{ $profile->nama_lengkap }}</h4>
                            <ul
                                class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                <li class="list-inline-item fw-semibold">
                                    <i class='bx bx-mail-send'></i> {{ $profile->email }}
                                </li>
                                <li class="list-inline-item fw-semibold">
                                    <i class='bx bx-map'></i> {{ $profile->alamat }}
                                </li>
                                <li class="list-inline-item fw-semibold">
                                    <i class='bx bx-calendar-alt'></i> {{ $profile->tgl_lahir }}
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
                            <i class='bx bx-user-check me-1'></i>{{ $profile->status }}
                        </a>
                    </div>
                </div>
            </div>