<?php

namespace DevOption\Kubernetes\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class KubernetesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Application $app)
    {
        $this->publishes([
            __DIR__.'/../../config/k8s.php' => $app->configPath('k8s.php'),
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