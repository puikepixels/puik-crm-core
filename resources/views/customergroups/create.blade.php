 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Create') }} {{ __('Customergroups') }}
            </h2>
            <button type="submit" class="btn-primary" form="customergroup">
                <span> {{ __('Save') }}</span>
          </button>
        </div>

    </x-slot>

    <div class="py-2">
        <div class="bg-white p-4 w-full">
            <form action="{{ route('customergroups.store') }}" id="customergroup"  method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input type="text" name="name" placeholder="name" label="Name" required=true :valueText="old('name') ?? $item->name ?? ''" />

          </form>
        </div>
    </div>
 </x-crm-layout>
