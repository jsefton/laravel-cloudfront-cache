<?php

namespace JSefton\CloudFrontCache;

use Illuminate\Support\ServiceProvider;

class CloudFrontCacheServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Configuration
        $this->publishes([
            __DIR__.'/../config/' => config_path(),
        ], 'cloudfrontcache.config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
