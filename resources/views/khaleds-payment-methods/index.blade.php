<x-tomato-admin-layout>
    <x-slot name="header">
        {{ __('Methods') }}
    </x-slot>

    <div class="pb-12" v-cloak>
        <div class="mx-auto">
            @if(\Modules\Payment\Entities\KhaledsPaymentMethod::count())
            <x-splade-table :for="$table" striped>
                <x-splade-cell is_active >
                    <h3 class="text-lg">
                        @if($item->is_active)
                            <x-heroicon-s-check-circle class="text-green-500 w-8 h-8"/>
                        @else
                            <x-heroicon-s-x-circle class="text-red-500 w-8 h-8"/>
                        @endif
                    </h3>
                </x-splade-cell>
                <x-splade-cell actions>
                    <div class="flex justify-start">
                        <Link href="/admin/khaleds-payment-methods/{{ $item->id }}" class="px-2 text-blue-500" >
                            <div class="flex justify-start space-x-2">
                                <x-heroicon-s-eye class="h-4 w-4 ltr:mr-2 rtl:ml-2"/>
                                <span>{{trans('tomato-admin::global.crud.view')}}</span>
                            </div>
                        </Link>
                        <Link href="/admin/khaleds-payment-methods/{{ $item->id }}/edit" class="px-2 text-yellow-400" slideover>
                            <div class="flex justify-start space-x-2">
                                <x-heroicon-s-pencil class="h-4 w-4 ltr:mr-2 rtl:ml-2"/>
                                <span>{{trans('tomato-admin::global.crud.edit')}}</span>
                            </div>
                        </Link>
                    </div>
                </x-splade-cell>
            </x-splade-table>
            @else
                <div class="relative text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-col items-center justify-center flex-1 p-6 mx-auto space-y-6 text-center bg-white filament-tables-empty-state dark:bg-gray-800 rounded-lg shadow-sm">
                            <div
                                class="flex items-center justify-center w-16 h-16 rounded-full text-primary-500 bg-primary-50 dark:bg-gray-700">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>

                            <div class="max-w-md space-y-1">
                                <h2 class="text-xl font-bold tracking-tight filament-tables-empty-state-heading dark:text-white">
                                    {{ trans('tomato-admin::global.empty') }}
                                </h2>

                                <p
                                    class="text-sm font-medium text-gray-500 whitespace-normal filament-tables-empty-state-description dark:text-gray-400">

                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-tomato-admin-layout>
