@extends('layouts.backend.app')
@section('title','Dashboard Pemilik')
@section('content')
  @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
  @elseif($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
  @endif

  <section id="dashboard-analytics">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card bg-analytics text-white">
          <div class="card-content">
            <div class="card-body text-center">
              <img src="{{asset('assets/images/backgrounds/decore-left.png')}}" class="img-left" alt=" card-img-left">
              <img src="{{asset('assets/images/backgrounds/decore-right.png')}}" class="img-right" alt=" card-img-right">
                <div class="avatar avatar-xl bg-primary shadow mt-0">
                    <div class="avatar-content">
                        <i class="feather icon-heart font-large-1"></i>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="mb-2 text-white">Welcome, {{Auth::user()->name}} </h1>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-12">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <i class="feather icon-heart text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700">11</h2>
                    <p class="mb-0 line-ellipsis">Total Penghuni</p>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-12">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <i class="feather icon-heart text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700">11</h2>
                    <p class="mb-0 line-ellipsis">Penghuni Aktif</p>
                </div>
            </div>
        </div>
      </div>

    </div>
  </section>
@endsection