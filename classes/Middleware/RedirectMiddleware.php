<?php

declare(strict_types=1);

namespace Dimsog\Seo\Classes\Middleware;

use Closure;
use Dimsog\Seo\Classes\RedirectFetcher;
use Dimsog\Seo\Classes\RedirectStatistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RedirectMiddleware
{
    public function __construct(
        private RedirectFetcher $redirectFetcher,
        private RedirectStatistic $redirectStatistic
    )
    {
    }

    public function handle(Request $request, Closure $next): mixed
    {
        $redirect = $this->redirectFetcher->fetchByRequest($request);
        if ($redirect === null) {
            return $next($request);
        }
        $this->redirectStatistic->add($redirect, $request);
        return Response::redirectTo($redirect->to, $redirect->code);
    }
}