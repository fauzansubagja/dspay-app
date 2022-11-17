@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Kelas</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h4 class="card-title">Basic Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">First Name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Last Name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Email Address</label>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Username</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Password</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Repeat Password</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection