 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Settings') }}  
            </h2>
        </div>

    </x-slot>


    <div class="p-2 grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="md:col-span-3">
            <h2 class="font-black text-lg md:text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('General') }}  
            </h2>
        </div>

        <a href="{{ route('customergroups.index') }}" class=" transition-all bg-white hover:bg-blue-100 border-transparent border-2 hover:border-ppblue p-4 rounded-lg flex items-center gap-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 md:w-10 md:h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                  </svg>                 
            </div>
            <div>
                <h1 class="md:text-xl font-bold mb-1">Users</h1>
                <p class="text-xs md:text-sm">Users how have acces to the system</p>
            </div>
        </a>


        <div class="md:col-span-3">
            <h2 class="font-black text-lg md:text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customers') }}  
            </h2>
        </div>

        <a href="{{ route('customergroups.index') }}" class=" transition-all bg-white hover:bg-blue-100 border-transparent border-2 hover:border-ppblue p-4 rounded-lg flex items-center gap-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 md:w-10 md:h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                  </svg>                 
            </div>
            <div>
                <h1 class="md:text-xl font-bold mb-1">Customergroups</h1>
                <p class="text-xs md:text-sm">Setup groups of customers</p>
            </div>
        </a>




        <div class="md:col-span-3">
            <h2 class="font-black text-lg md:text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Tasks') }}  
            </h2>
        </div>

        <a href="{{ route('taskpriorities.index') }}" class=" transition-all bg-white hover:bg-blue-100 border-transparent border-2 hover:border-ppblue p-4 rounded-lg flex items-center gap-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 md:w-10 md:h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                  </svg>                 
            </div>
            <div>
                <h1 class="md:text-xl font-bold mb-1">Priorities</h1>
                <p class="text-xs md:text-sm">Setup your custom priorities</p>
            </div>
        </a>

        <a href="{{ route('taskstatuses.index') }}" class=" transition-all bg-white hover:bg-blue-100 border-transparent border-2 hover:border-ppblue p-4 rounded-lg flex items-center gap-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 md:w-10 md:h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                  </svg>                  
            </div>
            <div>
                <h1 class="md:text-xl font-bold mb-1">Task statuses</h1>
                <p class="text-xs md:text-sm">Create your own workflow</p>
            </div>
        </a>

    </div>
 </x-crm-layout>
