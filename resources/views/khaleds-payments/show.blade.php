<x-tomato-admin-layout>

<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}}  #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">


          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Model table')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->model_table}}
                  </h3>
              </div>
          </div>


          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Order table')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->order_table}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Payment method')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->payment_method}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Payment status')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->payment_status}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Transaction code')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->transaction_code}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Amount')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->amount}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Notes')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->notes}}
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
</x-tomato-admin-layout>
