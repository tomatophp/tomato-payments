<?php

namespace TomatoPHP\TomatoPayments\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class KhaledsPaymentLogController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-payments::khaleds-payment-logs.index',
            table: \TomatoPHP\TomatoPayments\Tables\KhaledsPaymentLogTable::class,
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-payments::khaleds-payment-logs.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentLog\KhaledsPaymentLogStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentLog\KhaledsPaymentLogStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog::class,
            message: __('KhaledsPaymentLog created successfully'),
            redirect: 'admin.khaleds-payment-logs.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'payment::khaleds-payment-logs.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'payment::khaleds-payment-logs.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentLog\KhaledsPaymentLogUpdateRequest $request
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentLog\KhaledsPaymentLogUpdateRequest $request, \TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('KhaledsPaymentLog updated successfully'),
            redirect: 'admin.khaleds-payment-logs.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoPayments\Models\KhaledsPaymentLog $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('KhaledsPaymentLog deleted successfully'),
            redirect: 'admin.khaleds-payment-logs.index',
        );
    }
}
