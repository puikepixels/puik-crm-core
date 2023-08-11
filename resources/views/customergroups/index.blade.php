 <x-crm-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customergroups') }}
            </h2>
            @can('customergroup:create')
                <a class="btn-primary" href="{{route($model.'s.create')}}">
                    <span> {{ __('Create') }}</span>
                </a>
            @endcan
        </div>

    </x-slot>

    <div class="py-2">
        <div class="bg-white p-4 w-full" x-data="{ showBar: false }">
            <table class="table">
                <thead class="bg-gray-100 md:sticky top-20" :class="{ 'shadow': showBar }"
                    @scroll.window="showBar = (window.pageYOffset > 20) ? true : false">
                    <tr>
                        <th scope="col" class="thead-th">{{ __('Name') }}</th>
                        <th scope="col" class="hidden md:inline-block thead-th">{{ __('Status') }}</th>
                        <th scope="col" class="thead-th"></th>
                    </tr>
                </thead>

                <tbody class="tbody">
                    @foreach ($data as $key => $item)
                        <tr class="tr">
                            <th class="td font-bold">
                                <a href="{{route($model.'s.show', $item->id)}}">{{ $item->name }}</a>
                            </th>

                            <td class="hidden md:inline-block td">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                    Active
                                </span>
                            </td>

                            <td class="td">
                                <div class="flex justify-end gap-4">
                                    @can('customergroup:delete')
                                        <x-btn.delete :action="route($model.'s.destroy', $item->id)" :model="$item" />
                                    @endcan
                                    @can('customergroup:edit')
                                        <x-btn.edit :href="route($model.'s.edit', $item->id)" />
                                    @endcan
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>

            {!! $data->links() !!}

        </div>
    </div>
 </x-crm-layout>
