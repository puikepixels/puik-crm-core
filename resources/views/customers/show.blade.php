 <x-crm-layout>

    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customers') }} <span class="text-ppblue font-normal text-lg">{{ $item->name }}</span> <span
                    class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                    {{ $item->CustomerGroup->name }}
                </span>
            </h2>
            <a class="btn-primary" href="{{ route($model . 's.edit', $item->id) }}">
                <span> {{ __('Edit') }} {{ __('customer') }}</span>
            </a>
        </div>
    </x-slot>

    <div class="py-2 grid grid-cols-3 gap-4">
        <div class="bg-white p-4">
            <label class="label">{{ __('Name') }}</label>
            <p>{{ $item->name }}</p>
            <hr class="hr" />
            <label class="label">{{ __('Customernumber') }}</label>
            <p>{{ $item->customer_number }}</p>
            <hr class="hr" />
            <label class="label">{{ __('Phone') }}</label>
            <p>{{ $item->phone }}</p>
            <hr class="hr" />
            <label class="label">{{ __('Email') }}</label>
            <p><a class="a" href="mailto:{{ $item->email }}">{{ $item->email }}</a></p>
            <hr class="hr" />
            <label class="label">{{ __('Adress') }}</label>
            <p>{{ $item->street }} {{ $item->street_number }} {{ $item->street_number_addition }}</p>
            <p>{{ $item->zip_code }} {{ $item->city }}</p>
            <p>land</p>
        </div>



        <div class="col-span-2 flex flex-col gap-4">
            <div id="notes" class="bg-white p-4">
                <h1 class="text-xl font-bold mb-2">Notities</h1>
                @forelse ($item->customerNotes as $customerNote)
                    <p>{{ $customerNote->id }}</p>
                @empty
                    <p>No Notities</p>
                @endforelse
            </div>

            <div id="projects" class="bg-white p-4 col-span-2 ">
                <h1 class="text-xl font-bold mb-2">Projecten</h1>
                @forelse ($item->projects as $project)
                    <p>{{ $project->id }}</p>
                @empty
                    <p>No Projecten</p>
                @endforelse
            </div>

            <div id="tasks" class="bg-white p-4 col-span-2 ">
                <h1 class="text-xl font-bold mb-2">Taken</h1>
                @forelse ($item->tasks as $task)
                <p>{{ $task->id }}</p>
            @empty
                <p>No Tasks</p>
            @endforelse
            </div>

        </div>


    </div>
 </x-crm-layout>
