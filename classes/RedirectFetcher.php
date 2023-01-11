<?php

declare(strict_types=1);

namespace Dimsog\Seo\Classes;

use Dimsog\Seo\Models\Redirect;
use Illuminate\Http\Request;

class RedirectFetcher
{
    public function fetchByRequest(Request $request): ?Redirect
    {
        return Redirect::where('from', '/' . $request->path())
            ->orWhere('from', $request->url())
            ->first();
    }
}