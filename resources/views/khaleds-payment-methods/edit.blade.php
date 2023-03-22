<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{__('KhaledsPaymentMethod')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.khaleds-payment-methods.update', $model->id)}}" method="post" :default="$model">

          <x-splade-input label="{{__('Method')}}" name="method" type="text"  placeholder="Method" />
          <x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="Name" />
          <x-splade-input label="{{__('Description')}}" name="description" type="text"  placeholder="Description" />
          <x-splade-input label="{{__('Color')}}" name="color" type="text"  placeholder="#fff" />
          <x-splade-input label="{{__('Icon')}}" name="icon" type="text"  placeholder="bx bx-circle" />

          <x-splade-checkbox label="{{__('Is active')}}" name="is_active" label="Is active" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} " :spinner="true" />
    </x-splade-form>
</x-splade-modal>
