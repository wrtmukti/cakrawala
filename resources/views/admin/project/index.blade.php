@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Proyek
                <small>Cakrawala</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">Project</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="box-title">Data Proyek Cakrawala</h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <a href="{{ route('admin-project-create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Tambah Proyek Baru
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
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
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tr style="font-weight: bold">
                                        <td class="text-center">No.</td>
                                        <td class="text-center">Nama Proyek</td>
                                        <td class="text-center">Lokasi</td>
                                        <td class="text-center">Tipe</td>
                                        <td class="text-center">Angsuran/Bulan</td>
                                        <td class="text-center">Jumlah Img Poster</td>
                                        <td class="text-center">Jumlah Img Tipe</td>
                                        <td class="text-center">Jumlah Img Siteplan</td>
                                        <td class="text-center">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project as $key => $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->project_name }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td class="text-center">{{ $data->type }}</td>
                                            <td class="text-center">Rp. {{ $data->price }}</td>
                                            <td class="text-center">
                                                <button type="button"
                                                    class="btn btn-success"><b>{{ count($project[$key]->imgPosters) }}</b></button><br>&nbsp;<br>
                                            </td>
                                            <td class="text-center">
                                                <button type="button"
                                                    class="btn btn-success"><b>{{ count($project[$key]->imgTypes) }}</b></button><br>&nbsp;<br>
                                            </td>
                                            <td class="text-center">
                                                <button type="button"
                                                    class="btn btn-success"><b>{{ count($project[$key]->imgSiteplans) }}</b></button><br>&nbsp;<br>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin-project-edit', ['id' => $data->id_project]) }}"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{ route('admin-project-delete', ['id' => $data->id_project]) }}"
                                                    class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>

    </div>
@endsection
