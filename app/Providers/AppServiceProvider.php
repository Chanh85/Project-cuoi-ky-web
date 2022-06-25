<?php

namespace App\Providers;

use App\Models\OrderItem;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['product.product', 'welcome','cart','admin'], function($view){
            $view->with('products', Product::all());
        });

        View::composer(['admin'], function($view){
            $view->with('orderItems',OrderItem::all());
        });
       
    }
}
