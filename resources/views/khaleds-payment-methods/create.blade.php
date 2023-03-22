<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{__('KhaledsPaymentMethod')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.khaleds-payment-methods.store')}}" method="post">
        
          <x-splade-input label="{{__('Method')}}" name="method" type="text"  placeholder="Method" />
          <x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="Name" />
          <x-splade-input label="{{__('Description')}}" name="description" type="text"  placeholder="Description" />
          
          
          <x-splade-checkbox label="{{__('Is active)}}" name="is_active" label="Is active" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{__('KhaledsPaymentMethod')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
