<div>
    <div class="container-fluid">
        <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Games</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $games->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-info-circle fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.games.add') }}" class="btn btn-primary mb-3 float-right">Add New Game</a>
                        <div class="table table-responsive">
                            @if (Session::has('notification'))
                                <div class="alert alert-danger">{{ Session::get('notification') }}</div>
                            @elseif (Session::has('status'))
                            <div class="alert alert-warning">{{ Session::get('status') }}</div>
                            @endif
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width:1px;">No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th class="text-center">Action Button</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                @if ($games->isNotEmpty())
                                    @foreach ($games as $game)
                                    @php
                                        $i++;
                                    @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $game->name }}</td>
                                            <td><img src="{{ asset('storage').'/'.$game->image }}" width="25" alt=""></td>
                                            <td>{{ $game->description }}</td>
                                            <td>{{ $game->created_at }}</td>
                                            <td>
                                                <form action="{{ route('admin.games.edit',['code' => $game->code]) }}"
                                                    class="d-inline">
                                                    <button class="btn btn btn-warning" type="submit">
                                                        <i class="fas fa-magic"></i>
                                                    </button>
                                                </form>
                                                <button wire:click="delete({{ $game->id }})" class="btn btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr><td align='center' colspan='4'>Data Tidak Ada</td></tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
