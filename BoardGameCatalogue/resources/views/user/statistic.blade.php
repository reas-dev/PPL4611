@extends('layouts.user_layout')
@section('title')
Statistic
@endsection

@section('content')
<div class="row">
  <div class="col-2 col-lg-1 col-xs-1">
    <img class="m-2" id="gambar-icon" src="{{ asset('/img/logo_bgc.png') }}">
    <!-- <i class=" fa fa-file-image-o" aria-hidden="true"></i> -->
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring2">Alamat Game</h6>
      </div>
    </div>
  </div>
  <div class="col-3 col-lg-3 col-xs-3 m-auto text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
    <h6 class="m-0 font-weight-bold" id="coloring">#4</h6>
  </div>
</div>
<div class="row">
  <div class="col-2 col-lg-1 col-xs-1">
    <img class="m-2" id="gambar-icon" src="{{ asset('/img/logo_bgc.png') }}">
    <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring2">Alamat Game</h6>
      </div>
    </div>
  </div>
  <div class="col-3 col-lg-3 col-xs-3 m-auto text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
    <h6 class="m-0 font-weight-bold" id="coloring">#4</h6>
  </div>
</div>
@endsection