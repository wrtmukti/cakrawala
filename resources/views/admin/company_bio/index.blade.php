@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Biografi Perusahaan
                <small>Cakrawala</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="">Biografi Perusahaan</li>
            </ol>
        </section>

        <section class="content">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formulir Edit Data Biografi Perusahaan</h3>
                    </div>
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('admin-companybio-update') }}" enctype="multipart/form-data">
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
                        <input type="hidden" name="id_company_bio" value="{{ $result['id_company_bio'] }}" id="">
                        <div class="row">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama Perusahaan</label>
                                        <input type="text" value="{{ $result->company_name }}" name="company_name"
                                            class="form-control" id="" placeholder="Nama Perusahaan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Panggilan Perusahaan</label>
                                        <input type="text" value="{{ $result->company_nickname }}"
                                            name="company_nickname" class="form-control" id=""
                                            placeholder="Nama Panggilan Perusahaan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Perusahaan</label>
                                        <input type="email" value="{{ $result->email }}" name="email"
                                            class="form-control" id="" placeholder="Email Perusahaan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat Perusahaan</label>
                                        <input type="text" value="{{ $result->address }}" name="address"
                                            class="form-control" id="" placeholder="Alamat Perusahaan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Google Maps URL Perusahaan</label>
                                        <input type="text" value="{{ $result->link_maps }}" name="link_maps"
                                            class="form-control" id="" placeholder="Google Maps URL Perusahaan"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Google Maps Iframe Perusahaan</label>
                                        <textarea class="form-control" name="iframe_maps" id="" cols="30" rows="10"
                                            placeholder="Google Maps Iframe Perusahaan" required>{{ $result->iframe_maps }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">No. Telepon Perusahaan</label>
                                        <input type="text" value="{{ $result->phone }}" name="phone"
                                            class="form-control" id="" placeholder="Nomor Telepon Perusahaan"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">No. Whatsapp Perusahaan</label>
                                        <input type="text" value="{{ $result->whatsapp }}" name="whatsapp"
                                            class="form-control" id="" placeholder="Nomor Whatsapp Perusahaan"
                                            required>
                                        <small class="text-danger">No WA, wajib menggunakan <b>awalan 62</b></small>
                                        <small class="text-danger">Contoh <b>628123890345</b></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Instagram Perusahaan</label>
                                        <input type="text" value="{{ $result->instagram }}" name="instagram"
                                            class="form-control" id="" placeholder="Instagram Perusahaan">
                                            <small class="text-danger">Silahkan diisi dengan username instagram, <b>contoh : cakrawala</b></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Facebook Perusahaan</label>
                                        <input type="text" value="{{ $result->facebook }}" name="facebook"
                                            class="form-control" id="" placeholder="Facebook Perusahaan">
                                            <small class="text-danger">Silahkan diisi dengan username facebook, <b>contoh : cakrawala</b></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Twitter Perusahaan</label>
                                        <input type="text" value="{{ $result->twitter }}" name="twitter"
                                            class="form-control" id="" placeholder="Username Twitter Perusahaan">
                                            <small class="text-danger">Silahkan diisi dengan username twitter, <b>contoh : cakrawala</b></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link Youtube Tentang Kami</label>
                                        <input type="text" value="{{ $result->youtube }}" name="youtube"
                                            class="form-control" id="" placeholder="Tipe Proyek" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Thumbnail Youtube Tentang Kami</label>
                                                <input type="file" name="youtube_thumbnail" id="exampleInputFile"
                                                    accept="image/jpeg, image/jpg, image/png">
                                                <small class="text-danger">File yang didukung : <b>PNG, JPG,
                                                        JPEG</b></small>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('image/img/home/' . $result->youtube_thumbnail) }}"
                                                    alt="Thumbnail Youtube Tentang Kami" width="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Logo Aplikasi</label>
                                                <input type="file" name="logo" id="exampleInputFile"
                                                    accept="image/jpeg, image/jpg, image/png">
                                                <small class="text-danger">File yang didukung : <b>PNG, JPG,
                                                        JPEG</b></small>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('image/icon/' . $result->logo) }}"
                                                    alt="Logo Aplikasi" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Perubahan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </section>
    </div>
@endsection
