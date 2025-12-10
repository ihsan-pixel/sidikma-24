@extends('backend.layout.base')

@section('content')
<div class="card">
    <div class="card-header">
        <h5><b>{{ $title }}</b></h5>
    </div>
    <div class="card-body">
        <form action="{{ route('broadcast.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Judul Broadcast</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Pesan</label>
                <textarea name="message" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label>Gambar (opsional)</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label>Kirim ke Role</label>
                <select name="roles[]" class="form-select" multiple>
                    @foreach($roles as $key => $role)
                        <option value="{{ $key }}">{{ $role }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Atau Pilih User Tertentu</label>
                <select name="users[]" class="form-select" multiple>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->nama_lengkap }} - {{ $user->no_tlp }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success" type="submit">Kirim Broadcast</button>
        </form>
    </div>
</div>
@endsection

{{-- <form action="{{ route('broadcast.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Pesan</label>
        <textarea name="message" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Gambar (opsional)</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Kirim ke Role:</label>
        <select name="target_roles[]" class="form-control" multiple>
            <option value="1">Admin Aplikasi</option>
            <option value="2">Guru & Pegawai</option>
            <option value="3">Admin Sekolah</option>
            <option value="4">Pengurus Yayasan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Kirim ke User tertentu (opsional):</label>
        <select name="target_users[]" class="form-control" multiple>
            @foreach(\App\Models\User::all() as $user)
                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->phone }})</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Kirim Broadcast</button>
</form> --}}
