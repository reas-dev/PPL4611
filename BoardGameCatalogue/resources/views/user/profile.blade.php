@extends('layouts.user_layout')
@section('title')
Profile
@endsection

@section('content')
<div class="row">
  <div class="col-2 col-lg-1 col-xs-1 text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <i class="fa fa-user-circle m-2" id="icon2" aria-hidden="true"></i>
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Name</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring2" href="#">Username</h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <hr>
</div>
<div class="row">
  <div class="col-2 col-lg-1 col-xs-1 text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <i class="fa fa-envelope-o m-2" id="icon2" aria-hidden="true"></i>
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Email</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring2" href="#">...@gmail.com</h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <hr>
</div>
<div class="row">
  <div class="col-2 col-lg-1 col-xs-1 text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <i class="fa fa-phone m-2" id="icon2" aria-hidden="true"></i>
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Phone</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring2" href="#">+62 ...</h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <hr>
</div>
<div class="row">
  <div class="col-2 col-lg-1 col-xs-1 text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <i class="fa fa-map-marker m-2" id="icon2" aria-hidden="true"></i>
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Address</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring2" href="#">City, Provinsi</h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-lg-12 col-xs-12 col-buttons text-center">
    <button class="btn main-orange buttons-4">Logout</button>
  </div>
</div>
@endsection