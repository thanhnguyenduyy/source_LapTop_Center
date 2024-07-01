<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view) {
            $categories = Category::where('active', 1)->get();

            $view->with('categories', $categories);
        });

        view()->composer('layout.selling', function ($view) {
            $sellingProducts = Product::orderBy('quantity_sold', 'DESC')->get()->take(4);

            $view->with('sellingProducts', $sellingProducts);
        });

        view()->composer(['layout.header', 'pages.shoppingCart', 'pages.checkout'], function ($view) {
            if (session('cart')) {
                $oldCart = Session::get('cart');

                $cart = new Cart($oldCart);

                $view->with(['cart' => Session::get('cart'), 'productCart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            }   
        });

        view()->composer('*', function ($view) {
            $view->with('currentAdmin', auth()->user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
