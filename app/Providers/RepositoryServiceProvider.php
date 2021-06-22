<?php

namespace App\Providers;

use App\Contract\BrandContract;
use App\Contract\CategoryContract;
use App\Contracts\AttributeContract;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        CategoryContract::class         =>          CategoryRepository::class,
        AttributeContract::class        =>          AttributeRepository::class,
        BrandContract::class            =>          BrandRepository::class,

    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
