<?php

declare(strict_types=1);

namespace Dimsog\Seo;

use Winter\Storm\Support\ServiceProvider as ServiceProviderBase;
use Dimsog\Seo\Classes\Middleware\RedirectMiddleware;

class ServiceProvider extends ServiceProviderBase
{
    public function register()
    {
        $this->app->singleton(RedirectMiddleware::class);
    }
}