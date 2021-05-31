{{-- <div>
    <form action="{{ route('teams.add-member',['code' => $team->code]) }}"
        class="d-inline">
        <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" type="submit">
            {{ __('Add Member') }}
        </button>
    </form>

    <form action="{{ route('teams.add-schedule',['code' => $team->code]) }}"
        class="d-inline">
        <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" type="submit">
            {{ __('Add Schedule') }}
        </button>
    </form>
</div> --}}

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
                            <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
                                <h6 class="m-0 font-weight-bold" id="coloring">{{ $team->game->name }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
                                <div class="card shadow1 mb-2 m-auto" id="card2">
                                    <img class="card-header img-cropped" id="card-header2" src="{{ asset('storage/' . $team->icon) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xs-12 mb-2 mt-2 text-center">
                                <h6 class="m-0 font-weight-bold" id="coloring">{{ $team->name }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown" aria-labelledby="icon">
                        <div class="card-body dropdown-item" id="card-body">
                            <div class="container col-lg-12 col-xs-12 container-buttons" id="coloring1">
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4 active">Member</button> -->
                                        <a class="font-weight-bold btn" href="{{ route('teams.show', ['code' => $team->code]) }}" id="menu">Member</a>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4">Schedule</button> -->
                                        <a class="font-weight-bold btn btn-dark active" id="menu">Schedule</a>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4">Statistic</button> -->
                                        <a class="font-weight-bold btn" href="{{ route('teams.statistic', ['code' => $team->code]) }}" id="menu">Statistic</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Page Content -->
                            @if ($status == 'CAP')
                                <div class="row" id="coloring">
                                    <div class="col-12 col-lg-9 col-xs-9">
                                    <p class="text-large">Add Schedule</p>
                                    </div>
                                    <div class="col-12 col-lg-3 col-xs-3">
                                    <p class="text-small text-center">
                                        <a href="{{ route('teams.add-schedule', ['code' => $team->code]) }}" class="fa fa-plus fa-3x text-decoration-none text-white"></a>
                                    </p>
                                    </div>
                                </div>
                            @else
                                <div class="row" id="coloring">
                                    <div class="col-12 col-lg-9 col-xs-9">
                                        <p class="text-large">Schedule List</p>
                                    </div>
                                </div>
                            @endif

                            @foreach ($team->schedules->sortBy('fight_at') as $schedule)
                                @php
                                    $date_now = Carbon\Carbon::now();
                                    $date_fight = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $schedule->fight_at);
                                @endphp
                                @if ($status == 'CAP' && ($date_fight->lt($date_now)) && $schedule->status == null)
                                <a href="{{ route('teams.add-score', ['code' => $schedule->code]) }}" class="text-decoration-none">
                                @endif
                                <div class="row mb-3">
                                    <div class="col-2 col-lg-1 col-xs-1 text-center">
                                        <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
                                        <i class="fa fa-calendar m-2 @if ($schedule->status == null && ($date_fight->lt($date_now))) text-warning @elseif ($schedule->status != null && ($date_fight->lt($date_now))) text-success @endif" id="icon2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-7 col-lg-8 col-xs-8 mb-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 col-xs-12">
                                                <h6 class="m-0 font-weight-bold @if ($schedule->status == null && ($date_fight->lt($date_now))) text-warning @elseif ($schedule->status != null && ($date_fight->lt($date_now))) text-success @endif" id="coloring">
                                                    @if ($schedule->status == $schedule->username_1->user_username)
                                                        <u>
                                                    @endif{{ $schedule->username_1->user_username }}@if ($schedule->status == $schedule->username_1->user_username)
                                                        </u>
                                                @endif VS @if ($schedule->status == $schedule->username_2->user_username)
                                                <u>
                                            @endif{{ $schedule->username_2->user_username }}@if ($schedule->status == $schedule->username_2->user_username)
                                                </u>
                                        @endif</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 col-xs-6">
                                                        <h6 class="m-0 font-weight-bold @if ($schedule->status == null && ($date_fight->lt($date_now))) text-warning @elseif ($schedule->status != null && ($date_fight->lt($date_now))) text-success @endif" id="coloring2">{{ Carbon\Carbon::parse($schedule->fight_at)->format('d M Y') }}</h6>
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-xs-6">
                                                        <h6 class="m-0 font-weight-bold @if ($schedule->status == null && ($date_fight->lt($date_now))) text-warning @elseif ($schedule->status != null && ($date_fight->lt($date_now))) text-success @endif" id="coloring2">{{ Carbon\Carbon::parse($schedule->fight_at)->format('H:i') }} WIB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($status == 'CAP')
                                </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
