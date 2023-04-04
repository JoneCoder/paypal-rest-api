<?php

namespace Jonecoder\PaypalRestApi;

use Illuminate\Support\ServiceProvider;
use Jonecoder\PaypalRestApi\Billing\Plan;
use Jonecoder\PaypalRestApi\Billing\Subscription;
use Jonecoder\PaypalRestApi\Catalogs\Product;

class PaypalRestApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()){
            $this->publishes([__DIR__.'/../config/config.php' => config_path('Paypal.php')],'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php' , 'Paypal');

        $this->app->singleton('Product',function(){
            return new Product();
        });

        $this->app->singleton('Plan',function(){
            return new Plan();
        });

        $this->app->singleton('Subscription',function(){
            return new Subscription();
        });
    }
}