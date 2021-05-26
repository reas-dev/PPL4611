@extends('layouts.layouts-main.home_myteam_layout')
@section('title')
My Team's - Team List
@endsection

@section('content')
<!-- Content Row -->
<div class="row">

  <div class="col-12 col-lg-12 col-xs-12 mb-4">

    <!-- Approach -->
    <div class="card shadow mb-4 dropdown">
      <div class="card-header py-3" id="card-header">
        <div class="row">
          <div class="col-2 col-lg-1 col-xs-1">
            <img class="m-2" id="gambar-icon" src="{{ asset('img/logo_bgc.png') }}">
            <!-- <div class="m-2" id="icon"> -->
            <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
            <!-- </div> -->
          </div>
          <div class="col-7 col-lg-9 col-xs-9 mb-2">
            <div class="row">
              <div class="col-12 col-lg-12 col-xs-12">
                <h6 class="m-0 font-weight-bold" id="coloring">My team #1</h6>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-12 col-xs-12">
                <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
              </div>
            </div>
          </div>
          <div class="col-3 col-lg-2 col-xs-2">
            <div class="m-2" id="icon">
              <button type="button" class="fa fa-cogs dropdown-toggle" aria-hidden="true" data-toggle="dropdown" id="drop" aria-haspopup="true" aria-expanded="false">
              </button>
              <!-- Gambar mahkota berbayar, ini cma ganti smntara -->
              <!-- ini nanti dropdown mahkotanya -->
              <!-- masih belum bisa dropdown -->
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown" aria-labelledby="icon">
        <div class="card-body dropdown-item" id="card-body">
          <div class="row" id="coloring">
            <div class="col col-2">
              <p class="text-small">User</p>
            </div>
            <div class="col col-7">
              <p class="text-small"></p>
            </div>
            <div class="col-1">
              <p class="text-small">W</p>
            </div>
            <div class="col-1">
              <p class="text-small">D</p>
            </div>
            <div class="col-1">
              <p class="text-small">L</p>
            </div>
          </div>
          <div class="row" id="coloring1">
            <div class="col col-2">
              <i class="fa fa-gavel"></i>
            </div>
            <div class="col col-7">
              <p class="text-small">qwerty123</p>
            </div>
            <div class="col-1">
              <p class="text-small">1</p>
            </div>
            <div class="col-1">
              <p class="text-small">3</p>
            </div>
            <div class="col-1">
              <p class="text-small">2</p>
            </div>
          </div>
          <div class="row" id="coloring1">
            <div class="col col-2">
              <i class="fa fa-quora"></i>
            </div>
            <div class="col col-7">
              <p class="text-small">qwerty123</p>
            </div>
            <div class="col-1">
              <p class="text-small">3</p>
            </div>
            <div class="col-1">
              <p class="text-small">1</p>
            </div>
            <div class="col-1">
              <p class="text-small">2</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection