<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{__('KhaledsPaymentLog')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.khaleds-payment-logs.store')}}" method="post">
        
          <x-splade-checkbox label="{{__('Status)}}" name="status" label="Status" />
          
          

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{__('KhaledsPaymentLog')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
