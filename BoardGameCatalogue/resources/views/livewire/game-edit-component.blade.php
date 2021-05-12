<div>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <form wire:submit.prevent="update"
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
                        <input wire:model="newimage" type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image" id="text-image">
                        @if ($newimage)
                        {{ $newimage->getClientOriginalName() }}
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
            @if ($newimage)
                <div class="col-sm-9 offset-sm-3 my-2">
                    <img src="{{ $newimage->temporaryUrl() }}" width="50"/>
                </div>
            @else
            <div class="col-sm-9 offset-sm-3 my-2">
                <img src="{{ asset('storage').'/'.$image }}" width="50"/>
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
            <button class="btn waves-effect btn-warning" type="submit">Update Game</button>
            {{-- <a class="btn waves-effect btn-secondary" href="{{ url('admin/games') }}">Batal</a> --}}
        </div>
    </form>
</div>

{{-- @push('scripts')
<script>
    $('#image').on('change',function(){
        //get the file name
        var fileName = $(this).val().replace('C:\\fakepath\\', " ");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
        document.getElementById('text-image').innerHTML = fileName;
    })
</script>
@endpush --}}
