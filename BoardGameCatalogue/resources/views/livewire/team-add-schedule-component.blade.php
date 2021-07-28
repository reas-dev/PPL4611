<div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black-1">
        <div class="text-white text-2xl mb-6">Add Schedule</div>
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
            <form wire:submit.prevent="store">
                @csrf
                @method('post')
                <div class="mt-4">
                    <label class="block font-medium text-sm text-white" for="username_1">
                        {{ __('Username 1') }}
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" wire:model="username_1" id="username_1"  type="text" name="username_1" :value="old('username_1')" required autofocus autocomplete="username_1" >
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-white" for="username_2">
                        {{ __('Username 2') }}
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" wire:model="username_2" id="username_2"  type="text" name="username_2" :value="old('username_2')" required autofocus autocomplete="username_2" >
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-white" for="date">
                        {{ __('Date') }}
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" wire:model="date" id="date"  type="date" name="date" :value="old('date')" required autofocus autocomplete="date" >
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-white" for="time">
                        {{ __('Time') }}
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" wire:model="time" id="time"  type="time" name="time" :value="old('time')" required autofocus autocomplete="time" >
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" type="submit">
                        {{ __('Add Schedule') }}
                    </button>
                    <a href="{{ route('teams.show',['code' => $code]) }}">
                        <button class="inline-flex items-center text-white px-4 py-2 bg-gray-500 border border-gray-500 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-gray-700 hover:text-gray-200 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition ml-4" type="button">
                            {{ __('Back') }}
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
