<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
</div>
