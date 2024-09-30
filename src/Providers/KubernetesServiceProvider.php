<?php

namespace DevOption\Kubernetes\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class KubernetesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/k8s.php' => Config::path('k8s.php'),
        ], 'k8s-config');
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/k8s.php', 'k8s'
        );
    }
}