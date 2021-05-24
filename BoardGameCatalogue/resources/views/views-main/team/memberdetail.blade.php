@extends('layouts.layouts-main.team_detail_layout')
@section('title')
Member Detail
@endsection

@section('content')
<div class="row" id="coloring">
  <div class="col-12 col-lg-9 col-xs-9">
    <p class="text-large">Add Member</p>
  </div>
  <div class="col-12 col-lg-3 col-xs-3">
    <p class="text-small text-center">
      <button class="fa fa-plus fa-3x" aria-hidden="true" id="drop1"></button>
    </p>
  </div>
</div>

<div class="row">
  <div class="col-2 col-lg-1 col-xs-1">
    <i class="fa fa-cogs m-2" id="icon2" aria-hidden="true"></i>
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Name</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring2">Username Capten</h6>
      </div>
    </div>
  </div>
</div>

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
        <h6 class="m-0 font-weight-bold" id="coloring2">Username 1</h6>
      </div>
    </div>
  </div>
</div>

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
        <h6 class="m-0 font-weight-bold" id="coloring2">Username 2</h6>
      </div>
    </div>
  </div>
</div>
@endsection