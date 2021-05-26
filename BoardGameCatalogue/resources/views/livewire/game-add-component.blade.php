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
                        <form wire:submit.prevent="store"
                            class="d-inline" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                    <input wire:model="name" type="text" class="form-control @error('name') border-bottom-danger @enderror" name="name" id="name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input wire:model="image" type="file" class="custom-file-input" name="image" id="image" required>
                                            <label class="custom-file-label" for="image" id="text-image">
                                            @if ($image)
                                            {{ $image->getClientOriginalName() }}
                                            @else
                                            Choose Image
                                            @endif
                                            </label>
                                        </div>
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @if ($image)
                                    <div class="col-sm-9 offset-sm-3 my-2">
                                        <img src="{{ $image->temporaryUrl() }}" width="50"/>
                                    </div>
                                @endif
                                <div class="form-group row">
                                    <label for="description" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea wire:model="description" class="form-control item @error('description') is-invalid @enderror" name="description" id="description" rows="5"></textarea>
                                        @error('description')
                                            <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn waves-effect btn-primary" type="submit">Add Game</button>
                                <a class="btn waves-effect btn-secondary" href="{{ url('admin/games') }}">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
