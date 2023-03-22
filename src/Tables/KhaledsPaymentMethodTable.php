<?php

namespace TomatoPHP\TomatoPayments\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class KhaledsPaymentMethodTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return \Modules\Payment\Entities\KhaledsPaymentMethod::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(label: trans('tomato-admin::global.search'),columns: ['id','method','name',])

            ->export()
            ->defaultSort('id')
            ->column(
                key: 'id',
                label: __('Id'),
                sortable: true)

            ->column(
                key: 'name',
                label: __('Name'),
                sortable: true)
            ->column(
                key: 'description',
                label: __('Description'),
                sortable: true)
            ->column(
                key: 'color',
                label: __('Color'),
                sortable: true)
            ->column(
                key: 'icon',
                label: __('Icon'),
                sortable: true)
            ->column(
                key: 'is_active',
                label: __('Is active'),
                sortable: true)
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->paginate(15);
    }
}
