@extends('layouts.layouts-main.home_gamelist_layout')
@section('title')
Game List - New Games
@endsection

@section('content')
<!-- Content Row -->
<div class="row">

  <div class="col-12 col-lg-12 col-xs-12 mb-4">

    <!-- Approach -->
    <div class="row">
      <div class="col-12 col-lg-4 col-xs-12 mb-2" id="icon1" href="#">
        <div class="card shadow1 mb-4 mr-auto ml-auto" id="card2" type="button">
          <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
          <div class="text-center m-2">
            <h6 class="m-0 font-weight-bold" id="coloring">Game Name 1</h6>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 col-xs-12 mb-2" id="icon1" href="#">
        <div class="card shadow1 mb-4 mr-auto ml-auto" id="card2" type="button">
          <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
          <div class="text-center m-2">
            <h6 class="m-0 font-weight-bold" id="coloring">Game Name 2</h6>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 col-xs-12 mb-2" id="icon1" href="#">
        <div class="card shadow1 mb-4 mr-auto ml-auto" id="card2" type="button">
          <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
          <div class="text-center m-2">
            <h6 class="m-0 font-weight-bold" id="coloring">Game Name 3</h6>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- Content Row -->
<div class="row">

  <div class="col-12 col-lg-12 col-xs-12 mb-4">

    <!-- Approach -->
    <div class="row">
      <div class="col-12 col-lg-4 col-xs-12 mb-2" id="icon1" href="#">
        <div class="card shadow1 mb-4 mr-auto ml-auto" id="card2" type="button">
          <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
          <div class="text-center m-2">
            <h6 class="m-0 font-weight-bold" id="coloring">Game Name 4</h6>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 col-xs-12 mb-2" id="icon1" href="#">
        <div class="card shadow1 mb-4 mr-auto ml-auto" id="card2" type="button">
          <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
          <div class="text-center m-2">
            <h6 class="m-0 font-weight-bold" id="coloring">Game Name 5</h6>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 col-xs-12 mb-2" id="icon1" href="#">
        <div class="card shadow1 mb-4 mr-auto ml-auto" id="card2" type="button">
          <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
          <div class="text-center m-2">
            <h6 class="m-0 font-weight-bold" id="coloring">Game Name 6</h6>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

@endsection