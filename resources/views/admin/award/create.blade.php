@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tambah Penghargaan Baru
                <small>Cakrawala</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="">Penghargaan</li>
                <li class="active">Tambah Penghargaan Baru</li>
            </ol>
        </section>

        <section class="content">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formulir Tambah Penghargaan Baru</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('admin-award-store') }}" enctype="multipart/form-data">
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
                                <label for="">Judul Penghargaan</label>
                                <input type="text" name="title" class="form-control" id=""
                                    placeholder="Judul Penghargaan" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File Penghargaan</label>
                                <input type="file" name="img_file" id="exampleInputFile" accept="image/jpeg, image/jpg, image/png" required>
                                <small class="text-danger">File yang didukung : <b>PNG, JPG, JPEG</b></small>
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
