@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Penghargaan
                <small>Cakrawala</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">Penghargaan</li>
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
                                    <h3 class="box-title">Data Penghargaan Cakrawala</h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <a href="{{ route('admin-award-create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Tambah Penghargaan Baru
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
                                        <td class="text-center">Judul Penghargaan</td>
                                        <td class="text-center">Tanggal Unggah</td>
                                        <td class="text-center">Gambar Penghargaan</td>
                                        <td class="text-center">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result['award_for_index'] as $key => $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('image/award/' . $data->img_file) }}" width="100" alt="Image Award">
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin-award-delete', ['id' => $data->id_award]) }}"
                                                    class="btn btn-danger" onclick="return confirmDelete()">
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

<script>
    // Confirm Delete
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus penghargaan ini?');
    }
</script>
