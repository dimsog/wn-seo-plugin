<?php

declare(strict_types=1);

namespace Dimsog\Seo\Components;

use Cms\Classes\ComponentBase;

class Seo extends ComponentBase
{
    public function onRun(): void
    {

    }

    public function componentDetails(): array
    {
        return [
            'name'        => 'dimsog.seo::lang.components.seo.name',
            'description' => ''
        ];
    }
}
