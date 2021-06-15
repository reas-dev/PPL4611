<div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-12 col-lg-12 col-xs-12 mb-4">
                <!-- Approach -->
                <div class="card shadow mb-4" id="card1">
                    <div class="card-header py-3" id="card-header1">
                        <div class="row">
                            <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
                                <div class="card shadow1 mb-2 m-auto" id="card2">
                                    <img class="card-header img-cropped" id="card-header2" src="{{ asset('storage/' . $user->profile_photo_path) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xs-12 mt-4 text-center">
                                <h6 class="m-0 font-weight-bold" id="coloring">{{ $user->name }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xs-12 mb-2 mt-2 text-center">
                                <h6 class="m-0" id="coloring"><i>{{ $user->username }}</i></h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown" aria-labelledby="icon">
                        <div class="card-body dropdown-item" id="card-body">
                            <div class="container col-lg-12 col-xs-12 container-buttons" id="coloring1">
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4 active">Member</button> -->
                                        <a class="font-weight-bold btn" href="{{ route('profile') }}" id="menu">My Profile</a>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4">Schedule</button> -->
                                        <a class="font-weight-bold btn" href="{{ route('profile.my-teams') }}" id="menu">My Team's</a>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4">Statistic</button> -->
                                        <a class="font-weight-bold btn btn-dark active" id="menu">Statistic</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($teams as $team)
                    <div class="row mb-3">
                        <div class="col-2 col-lg-1 col-xs-1">
                            <img class="m-2" id="gambar-icon" src="{{ asset('storage/'.$team->team->icon) }}">
                            <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
                        </div>
                        <div class="col-7 col-lg-8 col-xs-8 mb-2">
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xs-12">
                                    <h6 class="m-0 font-weight-bold" id="coloring">{{ $team->team->name }}</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xs-12">
                                    <h6 class="m-0 font-weight-bold" id="coloring2">{{ $team->team->game->name }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-lg-3 col-xs-3 text-center text-white">
                            <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
                            <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
                            @php
                                $rank = $statistics->where('username', Auth::user()->username)->where('team', $team->team->name)->first();
                            @endphp
                            #{{ $rank->rank }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
