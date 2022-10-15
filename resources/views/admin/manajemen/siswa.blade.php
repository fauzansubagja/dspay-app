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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <a href="add-booking.html" class="btn btn-primary"><i class="fas fa-plus"></i>
                                Tambah</a>
                            <a href="add-booking.html" class="btn btn-danger"><i class="fas fa-upload"></i>
                                Upload Siswa</a>
                            <a href="add-booking.html" class="btn btn-warning"><i class="fas fa-print"></i>
                                Cetak</a>
                            <form action="" class="form-horizontal float-right" method="get" accept-charset="utf-8">
                                <div class="input-group input-group" style="width: 260px;">
                                    <input type="text" id="field" autofocus name="n" placeholder="NIS Siswa"
                                        class="form-control" required>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default veiwbutton"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Nama Ibu Kandung</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection