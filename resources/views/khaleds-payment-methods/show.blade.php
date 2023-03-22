<x-tomato-admin-layout>
    <x-slot name="header">
        {{ __('Methods') }}
    </x-slot>
<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}} #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Method')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->method}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Name')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->name}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Description')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->description}}
                  </h3>
              </div>
          </div>



          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Is active')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->is_active}}
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
    <x-tomato-relation-manager   :model=$model :relations=$relationMangers />

</x-tomato-admin-layout>
