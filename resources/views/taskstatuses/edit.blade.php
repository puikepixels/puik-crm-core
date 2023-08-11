 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('taskstatus') }} <span class="text-ppblue font-normal text-lg">{{ $item->title }}</span>
            </h2>
            <button type="submit" class="btn-primary" form="taskstatus">
                <span> {{ __('Save') }}</span>
          </button>
        </div>

    </x-slot>
    <div class="bg-white p-4 w-full">


        <form action="{{ route('taskstatuses.update', $item) }}" id="taskstatus" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-form.input type="text" name="title" placeholder="Title" label="Title" required=true :valueText="old('title') ?? $item->title ?? ''" />
        </form>

    </div>

 </x-crm-layout>
