<?php

namespace TomatoPHP\TomatoPayments\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPayments\RelationManager\KhaledsPaymentRelation;
use TomatoPHP\TomatoPayments\Tables\KhaledsPaymentTable;
use TomatoPHP\TomatoPHP\Services\Tomato;

class KhaledsPaymentMethodController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-payments::khaleds-payment-methods.index',
            table: \TomatoPHP\TomatoPayments\Tables\KhaledsPaymentMethodTable::class,
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
            model: \TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-payments::khaleds-payment-methods.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentMethod\KhaledsPaymentMethodStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentMethod\KhaledsPaymentMethodStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod::class,
            message: __('KhaledsPaymentMethod created successfully'),
            redirect: 'admin.khaleds-payment-methods.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-payments::khaleds-payment-methods.show',
            data: ['relationMangers'=>[
                KhaledsPaymentRelation::class,

            ]],
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-payments::khaleds-payment-methods.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentMethod\KhaledsPaymentMethodUpdateRequest $request
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentMethod\KhaledsPaymentMethodUpdateRequest $request, \TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('KhaledsPaymentMethod updated successfully'),
            redirect: 'admin.khaleds-payment-methods.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoPayments\Models\KhaledsPaymentMethod $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('KhaledsPaymentMethod deleted successfully'),
            redirect: 'admin.khaleds-payment-methods.index',
        );
    }
}
