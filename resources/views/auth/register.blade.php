<x-guest-layout>

    <x-auth-layout url="/login" label="Sign In">

        <section class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-zinc-100 dark:bg-black">

            @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
            @endsession

            <div class="flex flex-col gap-3 min-w-80 min-w">

                <div class="flex flex-row gap-3 items-center justify-center">
                    <x-application-logo class="w-8 h-8" />
                    <h2 class="text-2xl font-bold text-center text-zinc-900 dark:text-zinc-100">
                        Sign Up
                    </h2>
                </div>
                
                <span class="text-sm text-center text-zinc-600 dark:text-zinc-400">
                    Create an account to continue
                </span>


                <form method="POST" action="{{ route('register') }}" class=" flex flex-col gap-3">
                    @csrf

                    <x-input id="name" class="block w-full" type="text" name="name" :value="old('name')"
                        autofocus autocomplete="name" aria-placeholder="Name" placeholder="Name" />
                    <x-input-error for="email" class="mt-2" />

                    <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')"
                        placeholder="email@example.com" autofocus autocomplete="username" />
                    <x-input-error for="email" class="mt-2" />

                    <x-input id="password" class="block w-full" type="password" name="password" 
                        autocomplete="new-password" placeholder="password" />
                    <x-input-error for="password" class="mt-2" />

                    <x-input id="password_confirmation" class="block w-full" type="password"
                        name="password_confirmation"  autocomplete="new-password"
                        placeholder="confirm password" />

                    <x-button class="block w-full" type="submit">
                        Sign Up
                    </x-button>
                </form>

                <span class="text-sm text-center text-zinc-600 dark:text-zinc-400">
                    Or Sign Up with
                </span>

                <div class="flex flex-col gap-3">
                    {{-- social login --}}

                    <x-button-social class="block w-full" type="submit">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 19">
                            <path fill-rule="evenodd"
                                d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>
                            Google
                        </span>
                    </x-button-social>

                    <x-button-social class="block w-full" type="submit">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>
                            GitHub
                        </span>
                    </x-button-social>



                </div>

            </div>




        </section>
    </x-auth-layout>
</x-guest-layout>