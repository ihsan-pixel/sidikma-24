@extends('backend.layout.base')

@section('content')
<div class="mb-4">
   <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            <a href="/#" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;">Add</a>
        </div>
    </div>
</div>
    <div class="card-body">
        <div class="card shadow mb-4 border-bottom-success" id="infosiswa" value="0">
            <!-- Card Header - Accordion -->
                <a href="#informasisiswa" class="d-block bg-success border border-success card-header py-3"
                    data-toggle="collapse" role="button" aria-expanded="true"
                    aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-white">Susunan Pengurus LP. Ma'arif Nu Kabupaten Gunungkidul</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="informasisiswa">
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>   
                                <tr>
                                    <td>Penasihat I</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Penasihat II</td>
                                    <td>: </span></td>
                                </tr>
                                <tr>
                                    <td>Penasihat III</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Ketua I</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Ketua II</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Sekretaris I</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Sekretaris II</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Bendahara I</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Bendahara II</td>
                                    <td>: </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
