<?php

namespace TomatoPHP\TomatoPayments\Tables\RelationManager;

use Illuminate\Http\Request;
use TomatoPHP\TomatoPayments\Models\KhaledsPayment;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Database\Eloquent\Builder;

class KhaledsPaymentTable extends AbstractTable
{
    /**
     * Create a new instance.
     * @param Builder $query
     * @return void
     */
    public function __construct(private Builder $query)
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
        return $this->query;
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
                key: 'user.name',
                label: __('user'),
                sortable: true)
            ->column(
                key: 'order.id',
                label: __('Order'),
                sortable: true)
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
            ->rowLink(fn (KhaledsPayment $payment) => route('admin.khaleds-payments.show', ['model' => $payment->id]))
            ->paginate(15);

    }
}
