<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{__('KhaledsPayment')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.khaleds-payments.update', $model->id)}}" method="post" :default="$model">
        
          
          <x-splade-input label="{{__('Model table')}}" name="model_table" type="text"  placeholder="Model table" />
          
          <x-splade-input label="{{__('Order table')}}" name="order_table" type="text"  placeholder="Order table" />
          <x-splade-input label="{{__('Payment method')}}" name="payment_method" type="text"  placeholder="Payment method" />
          <x-splade-input label="{{__('Payment status')}}" name="payment_status" type="text"  placeholder="Payment status" />
          <x-splade-input label="{{__('Transaction code')}}" name="transaction_code" type="text"  placeholder="Transaction code" />
          <x-splade-input label="{{__('Amount')}}" type='number' name="amount" placeholder="Amount" />
          <x-splade-input label="{{__('Notes')}}" name="notes" type="text"  placeholder="Notes" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{__('KhaledsPayment')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
