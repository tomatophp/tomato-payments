<?php

namespace TomatoPHP\TomatoPayments;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoPayments\Menus\KhaledsPaymentLogMenu;
use TomatoPHP\TomatoPayments\Menus\KhaledsPaymentMenu;
use TomatoPHP\TomatoPayments\Menus\KhaledsPaymentMethodMenu;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenuRegister;


class TomatoPaymentsServiceProvider extends ServiceProvider
{
    public function register(): void
    {


        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-payments.php', 'tomato-payments');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-payments.php' => config_path('tomato-payments.php'),
        ], 'tomato-payments-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'tomato-payments-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-payments');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-payments'),
        ], 'tomato-payments-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-payments');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => app_path('lang/vendor/tomato-payments'),
        ], 'tomato-payments-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        //you boot methods here
        TomatoMenuRegister::registerMenu(KhaledsPaymentMenu::class);
        TomatoMenuRegister::registerMenu(KhaledsPaymentLogMenu::class);
        TomatoMenuRegister::registerMenu(KhaledsPaymentMethodMenu::class);
    }
}
