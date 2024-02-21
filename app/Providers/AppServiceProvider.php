<?php

namespace App\Providers;

use App\Repositories\HeaderRepository;
use App\Repositories\RegionalRepository;
use App\Repositories\StoreRepository;
use App\Repositories\UserRepository;
use App\Repositories\QuestionRepository;
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
        $this->app->bind(UserRepository::class, function ($app) { return new UserRepository(); });
        $this->app->bind(StoreRepository::class, function ($app) { return new StoreRepository(); });
        $this->app->bind(RegionalRepository::class, function ($app) { return new RegionalRepository(); });
        $this->app->bind(QuestionRepository::class, function ($app) { return new QuestionRepository(); });
        $this->app->bind(HeaderRepository::class, function ($app) { return new HeaderRepository(); });
    
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
