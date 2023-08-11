 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Create') }} {{ __('Customer') }}
            </h2>
            <button type="submit" class="btn-primary" form="customergroup">
                <span> {{ __('Save') }}</span>
          </button>
        </div>

    </x-slot>

    <div class="py-2">
        <div class="bg-white p-4 w-full">
            <form action="{{ route('customers.store') }}" id="customergroup"  method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input type="text" name="name" placeholder="name" label="Name"  :valueText="old('name') ?? $item->name ?? ''" />
                <x-form.select type="text" name="customer_group_id" placeholder="No customergroup" label="Customergroup select" :model="$customergroups" :value="old('customer_group_id') ?? $item->customer_group_id ?? ''" />


          </form>
        </div>
    </div>
 </x-crm-layout>
