<div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black-1">
        <div class="text-white text-2xl mb-6">Team</div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-black-1 overflow-hidden sm:rounded-lg">
            @if ($errors->any())
            <div class="mb-4">
                <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div>
                    <label for="icon" class="block font-medium text-sm text-white mb-2">Logo Icon</label>
                    <input wire:model="icon" type="file" class="inline-flex items-center text-white px-4 py-2 bg-gray-500 border border-gray-500 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-gray-700 hover:text-gray-200 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition mt-2 mr-2 bg-white text-gray-700" name="icon" id="icon" required>
                    @error('icon')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                @if ($icon)
                <div class="mt-2">
                    <div class="block rounded-full w-20 h-20">
                        <img src="{{ $icon->temporaryUrl() }}" width="50"/>
                    </div>
                </div>
                @endif

                <div class="mt-4">
                    <label class="block font-medium text-sm text-white" for="name">
                        {{ __('Team Name') }}
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" wire:model="name" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-white" for="game">
                        {{ __('Game') }}
                    </label>
                    <select wire:model="game" name="game" id="game" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required>
                        <option>Choose...</option>
                        @foreach ($games as $game)
                        <option value="{{ $game->code }}">
                            {{ $game->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" type="submit">
                        {{ __('Create Team') }}
                    </button>
                    <a href="{{ url('/') }}">
                        <button class="inline-flex items-center text-white px-4 py-2 bg-gray-500 border border-gray-500 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-gray-700 hover:text-gray-200 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition ml-4" type="button">
                            {{ __('Back') }}
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
