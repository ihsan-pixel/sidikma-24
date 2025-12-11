<?php

date_default_timezone_set('Asia/Jakarta');

$b = time();
$hour = date('G', $b);

if ($hour >= 0 && $hour <= 11) {
    $congrat = 'Selamat Pagi';
} elseif ($hour >= 12 && $hour <= 14) {
    $congrat = 'Selamat Siang ';
} elseif ($hour >= 15 && $hour <= 17) {
    $congrat = 'Selamat Sore ';
} elseif ($hour >= 17 && $hour <= 18) {
    $congrat = 'Selamat Petang ';
} elseif ($hour >= 19 && $hour <= 23) {
    $congrat = 'Selamat Malam ';
}
    
?>

<nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center"
    id="layout-navbar" style="background-color: #0a48b3;">
    <style>
        .navbar {
            background-color: #0a48b3 !important;
            box-shadow: none !important;
        }
    </style>

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow d-flex align-items-center" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <span class="text-white fw-semibold me-2 d-none d-md-inline-block">
                        {{ $congrat }}, {{ request()->user()->nama_lengkap }}
                    </span>
                    @if (request()->user()->role == 2)
                        <div class="avatar avatar-online">
                            <img src="{{ asset('') }}storage/images/users/{{ request()->user()->image }}" alt="" class="w-px-40 rounded-circle">
                        </div>
                    @elseif (request()->user()->email_verified_at == null)
                        <div class="avatar avatar-online">
                            <img src="{{ asset('/storage/images/users/t1.png') }}" alt="" class="w-px-40 rounded-circle">
                        </div>
                    @else
                        <div class="avatar avatar-online">
                            <img src="{{ request()->user()->image }}" alt="" class="w-px-40 rounded-circle">
                        </div>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="/">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    @if (request()->user()->role == 2)
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('') }}storage/images/users/{{ request()->user()->image }}" alt="" class="w-px-40 rounded-circle">
                                        </div>
                                    @elseif (request()->user()->email_verified_at == null)
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('/storage/images/users/t1.png') }}" alt="" class="w-px-40 rounded-circle">
                                        </div>
                                    @else
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('/storage/images/users/users_.png') }}" alt="" class="w-px-40 rounded-circle">
                                        </div>
                                    @endif
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">
                                        {{ request()->user()->full_name }}
                                    </span>
                                    <small class="text-muted">
                                        {{ request()->user()->role == 1 ? 'Admin' : 'Anggota' }}
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><div class="dropdown-divider"></div></li>
                    @if (in_array(request()->user()->role, [2]))
                    <li>
                        <a class="dropdown-item" href="/profile">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    @endif
                    <li><div class="dropdown-divider"></div></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="bx bx-log-in me-2"></i>
                            <span class="align-middle">Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
    </div>
</nav>
