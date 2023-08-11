 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Dashboard') }}  <br class="md:hidden" />  <span class="text-ppblue font-normal text-lg"> {{ __('Welcome') }}  {{ Auth::user()->name }}</span>
            </h2>
        </div>

    </x-slot>


    <div class="py-2 grid grid-cols-1 md:grid-cols-3 gap-4">

        <div class="bg-green-500 text-white p-4 rounded-lg">
            <h1 class="text-xl font-bold mb-2">Customers ({{$customerCount}})</h1>
            <p>Een simpel CRM systeem.</p>
        </div>

        <div class="bg-yellow-500 text-white p-4 rounded-lg">
            <h1 class="text-xl font-bold mb-2">Tasks ({{$taskCount}})</h1>
            <p>Een simpel CRM systeem.</p>
        </div>


        <div class="bg-purple-500 text-white p-4 rounded-lg">
            <h1 class="text-xl font-bold mb-2">Projects ({{$projectCount}})</h1>
            <p>Een simpel CRM systeem.</p>
        </div>
    </div>
</x-crm-layout>
