@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Siswa</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tr>
                                            <td width="20">NIS SIswa</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">NISN Siswa</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Nama Lengkap</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Jenis Kelamin</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Tempat, Tanggal Lahir</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Hobi</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">No. Handphone</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Alamat</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Nama Ibu Kandung</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Nama Ayah Kandung</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">No. Handphone Orang Tua</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Kelas</td>
                                            <td class="px-2">:</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <a href="" class="btn btn-secondary">Kembali</a>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <img src="" class="img-thumbnail img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection