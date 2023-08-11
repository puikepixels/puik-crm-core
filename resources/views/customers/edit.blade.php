 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customer') }} <span class="text-ppblue font-normal text-lg">{{ $item->name }}</span>
            </h2>
            <button type="submit" class="btn-primary" form="customer">
                <span> {{ __('Save') }}</span>
            </button>
        </div>

    </x-slot>
    <div class="bg-white p-4 w-full">

        <form action="{{ route('customers.update', $item) }}" id="customer" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-form.input type="text" name="name" placeholder="name" label="Name" required=true
                :valueText="old('name') ?? ($item->name ?? '')" />

                <x-form.input type="text" name="customer_number" placeholder="name" label="Customer number" required=true
                :valueText="old('customer_number') ?? ($item->customer_number ?? '')" />
            <x-form.select type="text" name="customer_group_id" placeholder="No customergroup"
                label="Customergroup select" :model="$customergroups" :value="old('customer_group_id') ?? ($item->customer_group_id ?? '')" />
        </form>

    </div>

 </x-crm-layout>
