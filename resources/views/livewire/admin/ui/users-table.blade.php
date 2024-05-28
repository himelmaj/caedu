<div class="flex flex-col flex-1 gap-5 justify-between">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-zinc-500 dark:text-zinc-400">
            <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>

                    <th xc:if="false" scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->users as $user)
                <tr
                    class="bg-white border-b dark:bg-zinc-800 dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-600">
                    <th scope="row" class="px-6 py-4 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                        {{$user->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$user->email}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->getRoleNames()[0]}}
                    </td>
                    <td xc:if="false" class="px-6 py-4">
                        <div class="">
                            {{-- <button wire:click="editUser({{$user->id}})"
                                class="text-xs text-zinc-500 dark:text-zinc-400 hover:text-zinc-700 dark:hover:text-zinc-300">
                                Edit
                            </button> --}}
                            <livewire:admin.actions.delete-user :id="$user->id" />
                        </div>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="my-3 dark:text-white">
        {{ $this->users->links() }}
    </div>
</div>