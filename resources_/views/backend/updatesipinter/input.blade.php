@extends('backend.layout.base')

@section('content')
<div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            <a href="/persuratan/add" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;">Ajukan</a>
        </div>