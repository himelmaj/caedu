<div class="flex flex-col flex-1 gap-5 justify-between">
    <div class="flex flex-wrap gap-5 ">

        @foreach ($this->roles as $role)
            <div class="flex flex-col px-6 py-10 overflow-hidden bg-zinc-900 hover:bg-zinc-800  rounded-xl shadow-lg duration-300 group w-1/4">
                <div class="flex justify-between">
                        <h2 class="text-lg font-semibold dark:text-white">{{ $role->name }}</h2>
                </div>
            </div>
        @endforeach
            

    </div>
   
    <div class="my-3 dark:text-white">
        {{ $this->roles->links() }}
    </div>
</div>