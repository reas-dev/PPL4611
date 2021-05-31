<div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black-1">
        <div class="text-white text-2xl mb-6">Add Score</div>
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
            <div class="form-group">
              <p class="h4 mb-4 text-white" id="coloring1">Winner : </p>
            </div>
            <form wire:submit.prevent="store">
                @csrf
                @method('post')
                <div class="form-group btn-group-vertival">
                    <div class="form-check mb-1">
                      <input type="radio" name="winner" wire:model="winner" id="user1" class="form-check-input" value="{{ $schedule->username_1->user_username }}">
                      <label class="form-check-label text-white" for="user1" id="coloring1">{{ $schedule->username_1->user_username }}</label>
                    </div>
                    <div class="form-check mb-1">
                      <input type="radio" name="winner" wire:model="winner" id="user2" class="form-check-input" value="{{ $schedule->username_2->user_username }}">
                      <label class="form-check-label text-white" for="user2" id="coloring1">{{ $schedule->username_2->user_username }}</label>
                    </div>
                    <div class="form-check mb-1">
                      <input type="radio" name="winner" wire:model="winner" id="user3" class="form-check-input" value="draw" checked>
                      <label class="form-check-label text-white" for="user3" id="coloring1">Draw</label>
                    </div>
                  </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" type="submit">
                        {{ __('Submit') }}
                    </button>
                    <a href="{{ route('teams.schedule',['code' => $schedule->team_code]) }}">
                        <button class="inline-flex items-center text-white px-4 py-2 bg-gray-500 border border-gray-500 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-gray-700 hover:text-gray-200 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition ml-4" type="button">
                            {{ __('Back') }}
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
