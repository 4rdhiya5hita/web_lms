@extends('layouts/hotel_linen/master')

@section('title', 'Management System')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('driver_index') }}">Home</a></li>
              <li class="breadcrumb-item active">Not A Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- BARIS PERTAMA -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>0</h3>

                        <p>Total Linen</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shower" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('linen_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h3>0</h3>

                        <p>Total Hotels</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-building" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('hotel_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Total Drivers</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('driver_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Hotel Transaction</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-home" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('hotel_transaction_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- BARIS KEDUA -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Internal Transaction</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-home" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('internal_transaction_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Laundry Plant</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-building" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('laundry_plant_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Linen Center</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-building" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('linen_center_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Total Template</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shower" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('template_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- BARIS KETIGA -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Total Registered Linen</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-registered" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('register_linen_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Linen To Packed</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-box" style="font-size: 60px"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Check Linen Status</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check-circle" style="font-size: 60px"></i>
                        </div>
                        <a href="{{ route('check_linen_status_index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Linen Center</p>
                        <p>Laundry Plant</p>
                        <p>Clean Linen</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check-circle" style="font-size: 60px"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        <!-- clean_linen yang punya ini  -->
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- BARIS KEEMPAT -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Internal Reject</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-list-alt" style="font-size: 60px"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Billing to LP</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money-bill" style="font-size: 60px"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Billing To Hotel</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money-bill" style="font-size: 60px"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>0</h3>

                        <p>Linen Aging In 15 Days</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-list-alt" style="font-size: 60px"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                
            </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->
@endsection