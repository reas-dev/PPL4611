<x-jet-authentication-card>
    <div class="text-white text-2xl mb-6">Team</div>
    <x-slot name="logo">
        {{-- <x-jet-authentication-card-logo /> --}}
    </x-slot>

    <x-jet-validation-errors class="mb-4" />

    <form wire:submit.prevent="store" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div x-data="{photoName: null, photoPreview: null}">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden"
                        wire:model="icon"
                        x-ref="photo"
                        x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
                        " />

            <x-jet-label for="icon" value="{{ __('Logo Icon') }}" />

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview">
                <span class="block rounded-full w-20 h-20"
                      x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-jet-secondary-button class="mt-2 mr-2 bg-white text-gray-700" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Select A Photo') }}
            </x-jet-secondary-button>

            <x-jet-input-error for="icon" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-jet-label for="name" value="{{ __('Team Name') }}" />
            <x-jet-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-jet-label for="game" value="{{ __('Game') }}" />
            <select wire:model="game" id="game" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="game" required>
                @foreach ($games as $game)
                <option value="{{ $game->code }}">
                    {{ $game->name }}
                </option>
                @endforeach

            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Create Team') }}
            </x-jet-button>
            <a href="{{ url('/') }}">
            <x-jet-secondary-button class="ml-4">
                {{ __('Back') }}
            </x-jet-secondary-button>
            </a>
        </div>
    </form>
</x-jet-authentication-card>
