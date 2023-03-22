<x-tomato-admin-layout>
    <x-slot name="header">
        {{ __('Payments') }}
    </x-slot>



    <div class="pb-12" v-cloak>
        <div class="mx-auto">
            @if(\Modules\Payment\Entities\KhaledsPayment::count())
            <x-splade-table :for="$table" striped>
                <x-splade-cell user>
                    <Link href="/admin/accounts/{{$item->user?->id}}/edit">{{($item->user?->name)?$item->user?->name : ''}}</Link>
                </x-splade-cell>
                <x-splade-cell order>

                    {{($item->order?->id)?$item->order?->id : ''}}
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
