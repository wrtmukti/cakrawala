@extends('layouts.admin')
@section('content')
    {{-- Start Check Available Carousel Active Or Not --}}
    @php
        $img_page = 'img' . ucwords($page) . 's';
        $isActive = 'empty';
        foreach ($result->$img_page as $key => $value) {
            if ($value->carousel_active == 'Y') {
                $isActive = 'available';
            }
            break;
        }
    @endphp
    {{-- End Check Available Carousel Active Or Not --}}

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Image {{ ucwords($page) }} Proyek
                <small>Cakrawala</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="">Proyek</li>
                <li class="active">Edit Image {{ ucwords($page) }} Proyek</li>
            </ol>
        </section>

        <section class="content">
            <div class="col-md-4">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Edit {{ ucwords($page) }}</b> {{ $result->project_name }}</h3>
                    </div>
                    <!-- form start -->
                    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin-project-img-update') }}">
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
                        <input type="hidden" name="id_project" value="{{ $result['id_project'] }}" id="">
                        <input type="hidden" name="page" value="{{ $page }}" id="">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputFile">File {{ $page }}</label>
                                <input type="file" name="img_file" id="exampleInputFile" accept="image/jpeg, image/jpg, image/png" required>

                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" {{ $isActive == 'available' ? 'disabled' : '' }}
                                        name="carousel_active" id="checklistCheckbox">
                                    <b class="text-{{ $isActive == 'available' ? 'danger' : 'warning' }}">
                                        @if ($isActive == 'available')
                                            <i>
                                                Maaf checklist nonaktif, karena sudah terdapat gambar yang active dalam
                                                satu carousel.
                                            </i>
                                        @else
                                            <i>
                                                Checklist, jika gambar ini merupakan gambar utama di dalam carousell !
                                            </i>
                                        @endif
                                    </b>
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>

            {{-- Galery --}}
            <div class="col-md-8">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Gallery {{ ucwords($page) }}</b> {{ $result->project_name }}</h3>
                    </div>

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            @php
                                $no = 1;
                            @endphp
                            <tr style="font-weight: bold">
                                <td class="text-center">No.</td>
                                <td class="text-center">Gambar {{ ucwords($page) }}</td>
                                <td class="text-center">Carousel Active</td>
                                <td class="text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result->$img_page as $img)
                                @if (!empty($img))
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('image/project/' . $page . '/' . $img->img_file) }}"
                                                alt="Image {{ $page }}" width="100">
                                        </td>
                                        <td class="text-center text-danger">
                                            <b>
                                                @if ($img->carousel_active == 'Y')
                                                    <div class="btn btn-success"><i class="fa fa-check"></i></div>
                                                @endif
                                            </b>
                                        </td>
                                        <td class="text-center">
                                            @php
                                                $id_img = 'id_img_' . $page;
                                            @endphp
                                            <a href="{{ route('admin-project-img-delete', ['id' => $img->$id_img, 'page' => $page]) }}"
                                                class="btn btn-danger" onclick="return confirmDelete()">
                                                <i class="fa fa-trash"></i>
                                             </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </section>

    </div>
@endsection

<script>
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus gambar ini?');
    }
</script>
