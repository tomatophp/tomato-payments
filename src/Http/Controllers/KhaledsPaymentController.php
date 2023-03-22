<?php

namespace TomatoPHP\TomatoPayments\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class KhaledsPaymentController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-payments::khaleds-payments.index',
            table: \TomatoPHP\TomatoPayments\Tables\KhaledsPaymentTable::class,
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
            model: \TomatoPHP\TomatoPayments\Models\KhaledsPayment::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-payments::khaleds-payments.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Http\Requests\KhaledsPayment\KhaledsPaymentStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoPayments\Http\Requests\KhaledsPayment\KhaledsPaymentStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoPayments\Models\KhaledsPayment::class,
            message: __('KhaledsPayment created successfully'),
            redirect: 'admin.khaleds-payments.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPayment $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoPayments\Models\KhaledsPayment $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-payments::khaleds-payments.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPayment $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoPayments\Models\KhaledsPayment $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-payments::khaleds-payments.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Http\Requests\KhaledsPayment\KhaledsPaymentUpdateRequest $request
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPayment $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoPayments\Http\Requests\KhaledsPayment\KhaledsPaymentUpdateRequest $request, \TomatoPHP\TomatoPayments\Models\KhaledsPayment $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('KhaledsPayment updated successfully'),
            redirect: 'admin.khaleds-payments.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPayment $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoPayments\Models\KhaledsPayment $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('KhaledsPayment deleted successfully'),
            redirect: 'admin.khaleds-payments.index',
        );
    }
}
