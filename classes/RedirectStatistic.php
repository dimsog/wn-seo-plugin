<?php

declare(strict_types=1);

namespace Dimsog\Seo\Classes;

use Dimsog\Seo\Models\Redirect;
use Illuminate\Http\Request;
use Dimsog\Seo\Models\RedirectStatistic as RedirectStatisticModel;

class RedirectStatistic
{
    public function add(Redirect $redirect, Request $request): bool
    {
        $model = new RedirectStatisticModel();
        $model->redirect_id = $redirect->id;
        $model->user_ip = $request->ip();
        $model->user_agent = $request->userAgent();
        return $model->save();
    }
}