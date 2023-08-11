 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customers') }} <span class="text-ppblue font-normal text-lg">{{ $item->name }}</span>
            </h2>
            <button type="submit" class="btn-primary" form="customergroup">
                <span> {{ __('Save') }}</span>
          </button>
        </div>

    </x-slot>
    <div class="bg-white p-4 w-full">

        <form action="{{ route('customergroups.update', $item) }}" id="customergroup" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-form.input type="text" name="name" placeholder="name" label="Name" required=true :valueText="old('name') ?? $item->name ?? ''" />

        </form>

    </div>

 </x-crm-layout>
