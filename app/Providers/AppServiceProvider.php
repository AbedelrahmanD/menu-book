<?php

namespace App\Providers;

use App\Models\Meal;
use Illuminate\Support\Facades\View;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $suggestedMeals = Meal::getMeal(array("limit" => 6, "random" => true));
        View::share('suggestedMeals', $suggestedMeals);
    }
}
