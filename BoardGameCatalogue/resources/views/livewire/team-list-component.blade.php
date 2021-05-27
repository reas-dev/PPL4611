<div>
    <!-- Content Row -->
<div class="row">

    <div class="col-12 col-lg-12 col-xs-12 mb-4">

      <!-- Approach -->
      @foreach ($team_list as $team)
      <a href="{{ route('teams.show', ['code' => $team->team->code]) }}" class="text-decoration-none">
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
                          <h6 class="m-0 font-weight-bold" id="coloring">{{ $team->team->name }}</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12">
                          <h6 class="m-0 font-weight-bold" id="coloring">{{ $team->team->game->name }}</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-3 col-lg-2 col-xs-2">
                      <div class="m-2" id="icon">
                          <i class="fa fa-cogs"></i>
                        <!-- Gambar mahkota berbayar, ini cma ganti smntara -->
                        <!-- ini nanti dropdown mahkotanya -->
                        <!-- masih belum bisa dropdown -->
                      </div>
                    </div>
                  </div>
              </div>
        </div>
      </a>
      @endforeach

    </div>
  </div>
</div>
