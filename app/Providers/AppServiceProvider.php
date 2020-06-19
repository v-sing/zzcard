<?php

namespace App\Providers;

use App\Modules\Repositories\ConfigRepositories;
use App\Modules\Service\MenuService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config((new ConfigRepositories())->config());
        //
        Paginator::defaultView('vendor.pagination.layui');//定义layui分页方式

        Blade::if('adminAuth', function ($url) {
            return in_array($url, session('urls'));
        });
        Blade::if('breadCrumb', function () {
            return MenuService::breadCrumb();
        });

    }
}
