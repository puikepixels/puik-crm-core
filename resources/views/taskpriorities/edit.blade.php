 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('taskpriority') }} <span class="text-ppblue font-normal text-lg">{{ $item->title }}</span>
            </h2>
            <button type="submit" class="btn-primary" form="taskpriority">
                <span> {{ __('Save') }}</span>
          </button>
        </div>

    </x-slot>
    <div class="bg-white p-4 w-full">


        <form action="{{ route('taskpriorities.update', $item) }}" id="taskpriority" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-form.input type="text" name="title" placeholder="Title" label="Title" required=true :valueText="old('title') ?? $item->title ?? ''" />
        </form>

    </div>

 </x-crm-layout>
