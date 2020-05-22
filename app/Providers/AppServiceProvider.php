<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

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
        view()->composer('*',function ($view)
        {
            $carts = \Cart::getContent();
            // dd($carts);
            $totalPrice=0;
            foreach ($carts as $cart)
            {
                $totalPrice += $cart->quantity * $cart->price;
            }
            $view->with([
                'cartTotalQuantity' =>\Cart::getTotalQuantity(),
                'totalPrice' => $totalPrice,
                'carts' =>$carts
            ]); 
        });
        view()->composer('*',function ($view)
        {
            if(Auth::check())
            {
                $view->with([
                'user_admin' => Auth::user()
            ]); 
            }
        });
        
    
    }
}
