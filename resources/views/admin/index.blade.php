@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Admin Cakrawala</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ COUNT($project) }}</h3>

                            <p>Proyek Cakrawala</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-home"></i>
                        </div>
                        <a href="{{ route('admin-project') }}" class="small-box-footer">Info lebih detail <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ COUNT($collaboration['activity']) }}</h3>

                            <p>Kerja Sama Cakrawala</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion ion-ios-people-outline"></i>
                        </div>
                        <a href="{{ route('admin-collaboration') }}" class="small-box-footer">Info lebih detail <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ COUNT($award['award_for_index']) }}</h3>

                            <p>Penghargaan Cakrawala</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-trophy"></i>
                        </div>
                        <a href="{{ route('admin-collaboration') }}" class="small-box-footer">Info lebih detail <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
    </div>
@endsection
