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
             <div class="flex gap-3 items-center">
                 <x-form.input type="text" name="first_name" placeholder="First name" label="First name"
                     :valueText="old('first_name') ?? ($item->first_name ?? '')" />
                 <x-form.input type="text" name="last_name" placeholder="Last name" label="Last name"
                     :valueText="old('last_name') ?? ($item->last_name ?? '')" />
             </div>

             <x-form.input type="text" name="customer_number" placeholder="name" label="Customer number"
                 required=true :valueText="old('customer_number') ?? ($item->customer_number ?? '')" />


             <x-form.select type="text" name="customer_group_id" placeholder="No customergroup"
                 label="Customergroup select" :model="$customergroups" :value="old('customer_group_id') ?? ($item->customer_group_id ?? '')" />

             <h3 class="text-xl font-bold my-3">Contact</h3>
             <div class="flex gap-3 items-center">

                 <x-form.input type="email" name="email" placeholder="Email" label="Email" :valueText="old('email') ?? ($item->email ?? '')" />
                 <x-form.input type="text" name="website" placeholder="Website" label="Website" :valueText="old('website') ?? ($item->website ?? '')" />
                 <x-form.input type="text" name="mobil" placeholder="Mobil" label="Mobil" :valueText="old('mobil') ?? ($item->mobil ?? '')" />
             </div>

             <h3 class="text-xl font-bold my-3">Adress</h3>

             <div class="flex gap-3 items-center">
                 <x-form.input type="text" name="street" placeholder="Street" label="Street" :valueText="old('street') ?? ($item->street ?? '')" />
                 <x-form.input type="text" name="street_number" placeholder="Street Number" label="Street Number"
                     :valueText="old('street_number') ?? ($item->street_number ?? '')" />
                 <x-form.input type="text" name="street_number_addition" placeholder="Addition" label="Addition"
                     :valueText="old('street_number_addition') ?? ($item->street_number_addition ?? '')" />
             </div>
             <div class="flex gap-3 items-center">
                 <x-form.input type="text" name="zip_code" placeholder="Zip code" label="Zip code"
                     :valueText="old('zip_code') ?? ($item->zip_code ?? '')" />
                 <x-form.input type="text" name="city" placeholder="City" label="City" :valueText="old('city') ?? ($item->city ?? '')" />
             </div>

             <h3 class="text-xl font-bold my-3">Extra information</h3>

             <div class="flex gap-3 items-center">
                 <x-form.input type="text" name="vatnumber" placeholder="Vatnumber" label="Vatnumber"
                     :valueText="old('vatnumber') ?? ($item->vatnumber ?? '')" />
                 <x-form.input type="text" name="iban" placeholder="iban" label="iban" :valueText="old('iban') ?? ($item->iban ?? '')" />
                 <x-form.input type="text" name="chamberofcommercenumber" placeholder="Chamber of commerce number"
                     label="Chamber of commerce number" :valueText="old('chamberofcommercenumber') ?? ($item->chamberofcommercenumber ?? '')" />
             </div>

         </form>

     </div>

 </x-crm-layout>
