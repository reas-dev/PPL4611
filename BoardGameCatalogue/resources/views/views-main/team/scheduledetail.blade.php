@extends('layouts.layouts-main.team_detail_layout')
@section('title')
Schedule Detail
@endsection

@section('content')
<div class="row" id="coloring">
  <div class="col-12 col-lg-9 col-xs-9">
    <p class="text-large">Add Schedule</p>
  </div>
  <div class="col-12 col-lg-3 col-xs-3">
    <p class="text-small text-center">
      <button class="fa fa-plus fa-3x" aria-hidden="true" id="drop1"></button>
    </p>
  </div>
</div>

<div class="row">
  <div class="col-2 col-lg-1 col-xs-1 text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <i class="fa fa-calendar m-2" id="icon2" aria-hidden="true"></i>
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Username 1 VS Username 2</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <div class="row">
          <div class="col-12 col-lg-6 col-xs-6">
            <h6 class="m-0 font-weight-bold" id="coloring2">DD - MM - YYYY</h6>
          </div>
          <div class="col-12 col-lg-6 col-xs-6">
            <h6 class="m-0 font-weight-bold" id="coloring2">Time WIB</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-2 col-lg-1 col-xs-1 text-center">
    <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
    <i class="fa fa-calendar m-2" id="icon2" aria-hidden="true"></i>
  </div>
  <div class="col-7 col-lg-8 col-xs-8 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <h6 class="m-0 font-weight-bold" id="coloring">Username 3 VS Username 4</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-xs-12">
        <div class="row">
          <div class="col-12 col-lg-6 col-xs-6">
            <h6 class="m-0 font-weight-bold" id="coloring2">DD - MM - YYYY</h6>
          </div>
          <div class="col-12 col-lg-6 col-xs-6">
            <h6 class="m-0 font-weight-bold" id="coloring2">Time WIB</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection