<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center px-4 py-2 border border-zinc-800 text-zinc-300 rounded-md font-semibold text-xs capitalize tracking-widest hover:bg-zinc-800 focus:bg-zinc-700 active:bg-zinc-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
