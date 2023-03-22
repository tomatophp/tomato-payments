<?php

namespace TomatoPHP\TomatoPayments\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class KhaledsPaymentTable extends AbstractTable
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
        return \Modules\Payment\Entities\KhaledsPayment::query();
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
            ->withGlobalSearch(label: trans('tomato-admin::global.search'),columns: ['id','transaction_code','order.id','user.name'])

            ->export()
            ->defaultSort('id')
            ->column(
                key: 'id',
                label: __('Id'),
                sortable: true)
            ->column(
                key: 'user',
                label: __('user'),
                sortable: true,highlight: true)
            ->column(
                key: 'order',
                label: __('Order'),
                sortable: true,highlight: true)
            ->column(
                key: 'payment_method',
                label: __('Payment method'),
                sortable: true)

            ->column(
                key: 'payment_status',
                label: __('Payment status'),
                sortable: true)
            ->column(
                key: 'transaction_code',
                label: __('Transaction code'),
                sortable: true)
            ->column(
                key: 'amount',
                label: __('Amount'),
                sortable: true)
            ->column(
                key: 'notes',
                label: __('Notes'),
                sortable: true)
            ->paginate(15);
    }
}
