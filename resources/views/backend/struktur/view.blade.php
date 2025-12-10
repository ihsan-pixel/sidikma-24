@extends('backend.layout.base')

@section('content')
<div class="mb-4">
   <div class="card table-responsive">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="font-size: 40px">
                <b>{{ $title }}</b>
            </h5>
            {{--<a href="/#" type="button" class="btn rounded-pill btn-primary justify-content-end"
                style="margin-left: 70%;">Add</a>--}}
        </div>
    </div>
</div>
    <div class="card-body">
        <div class="card shadow mb-4 border-bottom-success" id="infosiswa" value="0">
            <!-- Card Header - Accordion -->
                <a href="#informasisiswa" class="d-block bg-success border border-success card-header py-3"
                    data-toggle="collapse" role="button" aria-expanded="true"
                    aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-white">Susunan Pengurus LP. Ma'arif Nu Kabupaten Gunungkidul Masa Jabatan 2021-2026</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="informasisiswa">
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>   
                                <tr>
                                    <td>Penasihat I</td>
                                    <td>: KH. Drs. Bardan Usman, M.Pd.</td>
                                </tr>
                                <tr>
                                    <td>Penasihat II</td>
                                    <td>: Drs. H. Sa'ban Nuroni, MA</span></td>
                                </tr>
                                <tr>
                                    <td>Penasihat III</td>
                                    <td>: H. Supriyanto, S.Ag, MSI</td>
                                </tr>
                                <tr>
                                    <td>Ketua I</td>
                                    <td>: Drs. H. Sangkin, M.Pd.</td>
                                </tr>
                                <tr>
                                    <td>Ketua II</td>
                                    <td>: H. Wagiran, S.Ag, MSI.</td>
                                </tr>
                                <tr>
                                    <td>Sekretaris I</td>
                                    <td>: Andar Styawan, M.Pd</td>
                                </tr>
                                <tr>
                                    <td>Sekretaris II</td>
                                    <td>: Ria Ali Wardana, S.Pd.I, MSI</td>
                                </tr>
                                <tr>
                                    <td>Bendahara I</td>
                                    <td>: Arini Nirmala Dewi, S.Pd.I</td>
                                </tr>
                                <tr>
                                    <td>Bendahara II</td>
                                    <td>: Nurlaily Fatayati, S.Pd.I</td>
                                </tr>
                                <tr>
                                    <td>SEKSI - SEKSI</td>
                                    <td>:</td>
                                </tr>
                                <tr>
                                    <td>Bidang MI</td>
                                    <td>: Mujiyana, S.Pd, M.Pd.</td>
                                </tr>
                                <tr>
                                    <td>Bidang MI</td>
                                    <td>: Ngatman, S.Pd.I.</td>
                                </tr>
                                <tr>
                                    <td>Bidang MI</td>
                                    <td>: H. Labib Junaidi, S.Pd.I.</td>
                                </tr>
                                <tr>
                                    <td>Bidang MTs/SMP</td>
                                    <td>: Hamid Abdul Basit, S.Ag, MSI</td>
                                </tr>
                                <tr>
                                    <td>Bidang MTs/SMP</td>
                                    <td>: H. Fatah Yasin, S.Pd.</td>
                                </tr>
                                <tr>
                                    <td>Bidang Penjamin Mutu Pendidikan</td>
                                    <td>: Drs. Amad Romelan, M.Pd.</td>
                                </tr>
                                <tr>
                                    <td>Bidang Penjamin Mutu Pendidikan</td>
                                    <td>: H. Latif Jauhari, S.Ag, MA</td>
                                </tr>
                                <tr>
                                    <td>Bidang Penjamin Mutu Pendidikan</td>
                                    <td>: Nadhif Maskur, S.Fil.I</td>
                                </tr>
                                <tr>
                                    <td>Bidang Pramuka Olahraga dan Seni</td>
                                    <td>: Supardi, S.Pd.</td>
                                </tr>
                                <tr>
                                    <td>Bidang Pramuka Olahraga dan Seni</td>
                                    <td>: Eliyan Giri Waluyo, S.Pd, MBA</td>
                                </tr>
                                <tr>
                                    <td>Bidang Pramuka Olahraga dan Seni</td>
                                    <td>: Ngadiyan, S.Pd.I, MSI</td>
                                </tr>
                                <tr>
                                    <td>Bidang Pramuka Olahraga dan Seni</td>
                                    <td>: Chundori, S.Pd</td>
                                </tr>
                                <tr>
                                    <td>Bidang Pramuka Olahraga dan Seni</td>
                                    <td>: Warsito, M.Pd</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection