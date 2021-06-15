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
                <h6 class="mb-3 mt-2 font-weight-bold" id="coloring">{{ $game->name }}</h6>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
                <div class="card shadow1 mb-2 m-auto" id="card2">
                    <img class="card-header img-cropped" sytle="z-index: 1; position: relative;" id="card-header2" src="{{ asset('storage/' . $game->image) }}">

                    @if ($liked == null)
                        <i class="fa fa-heart-o content" style="z-index: 2;" aria-hidden="true" id="btn" type="button" wire:click="like()"></i>
                    @else
                        <i class="fa fa-heart content text-danger" style="z-index: 2;" aria-hidden="true" id="btn" type="button" wire:click="unlike()"></i>
                    @endif

                </div>
              </div>
            </div>
          </div>
          <div class="dropdown" aria-labelledby="icon">
            <div class="card-body dropdown-item" id="card-body">
              <div class="row" id="coloring1">
                <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
                  <p class="text-small text-wrap d-flex justify-content-between">{{ $game->description }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
