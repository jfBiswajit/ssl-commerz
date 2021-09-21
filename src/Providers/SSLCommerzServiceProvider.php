<?php

namespace JfBiswajit\SSLCommerz\Providers;

use Illuminate\Support\ServiceProvider;

class SSLCommerzServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'jfbiswajit/ssl-commerz');
    // $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    $this->mergeConfigFrom(__DIR__ . '/../../config/sslcommerz.php', 'sslcommerz');
  }
}
