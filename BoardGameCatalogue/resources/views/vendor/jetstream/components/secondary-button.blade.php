<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center text-white px-4 py-2 bg-gray-500 border border-gray-500 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-gray-700 hover:text-gray-200 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
