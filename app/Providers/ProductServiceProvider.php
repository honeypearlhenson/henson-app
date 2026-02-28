<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'Water',
                    'category' => 'Beverages'
                ],
                [
                    'id' => 2,
                    'name' => 'Smartphone',
                    'category' => 'Electronics'
                ],
                [
                    'id' => 3,
                    'name' => 'Brocoli',
                    'category' => 'Vegetables'
                ]
            ];

            return new ProductService($products);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('productKey', 'abc123');
    }
}
