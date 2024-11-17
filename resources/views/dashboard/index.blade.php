@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-stopwatch"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Last Signal</span>
          <span class="info-box-number">410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-line"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Today Signals</span>
          <span class="info-box-number">410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bell"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Channels Subscribed</span>
          <span class="info-box-number">{{$channels_count}}<span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->


    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-info elevation-1"><i class="fab fa-telegram-plane"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Telegram Channels</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>


  <!-- /.row -->
</div><!--/. container-fluid -->
@endsection