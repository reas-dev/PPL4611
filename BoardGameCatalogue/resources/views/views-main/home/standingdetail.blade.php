@extends('layouts.layouts-main.home_detail_layout')
@section('title')
Standing Detail
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <div class="col-12 col-lg-12 col-xs-12 mb-4">

      <!-- Approach -->
      <div class="card shadow mb-4" id="card1">
        <div class="card-header py-3" id="card-header1">
          <div class="row">
            <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
              <h6 class="m-0 font-weight-bold" id="coloring">Alamat Game</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
              <div class="card shadow1 mb-2 m-auto" id="card2">
                <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
              </div>
            </div>
            <!-- <div class="col-3 col-lg-1 col-xs-1 m-auto">
                          <div class="m-2" id="icon">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                          </div>
                        </div> -->
          </div>
          <div class="row">
            <div class="col-12 col-lg-12 col-xs-12 mb-2 mt-2 text-center">
              <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
            </div>
          </div>
        </div>
        <div class="dropdown" aria-labelledby="icon">
          <div class="card-body dropdown-item" id="card-body">
            <div class="row" id="coloring">
              <div class="col col-2">
                <p class="text-small">#</p>
              </div>
              <div class="col col-7">
                <p class="text-small">Username</p>
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
                <i class="text-small">1</i>
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
                <i class="text-small">2</i>
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

</div>
<!-- /.container-fluid -->

@endsection