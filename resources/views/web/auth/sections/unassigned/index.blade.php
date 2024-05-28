<x-guest-layout>

    <main class="flex flex-1 items-center justify-center bg-black flex-col gap-2 h-screen">


        <section>
            <h1>
                {{ auth()->user()->name }} you have unassigned role, contact admin to assign role.
            </h1>
        </section>

        <section class="flex flex-row gap-2">
            <h2>
                You can also contact admin via email
            </h2>
            <a href="mailto:admin@example.com" class="text-blue-500 hover:text-blue-700">
                Email
            </a>
        </section>

        <section class="flex flex-col gap-2">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <span class=" flex justify-center items-center gap-2 text-black font-bold dark:text-white
                    hover:dark:text-blue-500">
                        Logout
                        @svg('heroicon-c-power', 'h-5 w-5')
                    </span>
                </button>
            </form>
        </section>

    </main>

</x-guest-layout>