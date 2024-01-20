@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tambah Proyek Baru
                <small>Cakrawala</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="">Proyek</li>
                <li class="active">Tambah Proyek Baru</li>
            </ol>
        </section>

        <section class="content">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formulir Tambah Data Proyek Baru</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('admin-project-store') }}">
                        @csrf
                        {{-- Start Notification --}}
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- End Notification --}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Nama Proyek</label>
                                <input type="text" name="project_name" class="form-control" id=""
                                    placeholder="Nama Proyek" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tipe Proyek</label>
                                <input type="text" name="type" class="form-control" id=""
                                    placeholder="Tipe Proyek" required>
                            </div>
                            <div class="form-group">
                                <label for="">Lokasi Proyek</label>
                                <input type="text" name="address" class="form-control" id=""
                                    placeholder="Lokasi Proyek" required>
                            </div>
                            <div class="form-group">
                                <label for="">Angsuran Proyek</label>
                                <input type="text" name="price" class="form-control" id=""
                                    placeholder="Angsuran Proyek per Bulan" required>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <small class="text-danger"><i>*Jika diperlukan</i></small>
                                <textarea class="form-control" name="project_desc" id="" cols="10" rows="3"
                                    placeholder="Deskripsi tambahan jika diperlukan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Google Maps URL</label>
                                <input type="text" name="link_maps" class="form-control" id=""
                                    placeholder="Google Maps URL" required>
                            </div>
                            <div class="form-group">
                                <label for="">Google Maps Iframe</label>
                                <textarea class="form-control" name="iframe_maps" id="" cols="30" rows="10"
                                    placeholder="Google Maps Iframe" required></textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </section>



    </div>
@endsection
