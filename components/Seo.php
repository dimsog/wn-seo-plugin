<?php

declare(strict_types=1);

namespace Dimsog\Seo\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\ComponentBase;
use Dimsog\Seo\Models\Settings;
use Winter\Storm\Support\Facades\Block;

class Seo extends ComponentBase
{
    public function onRun(): void
    {
        $settings = Settings::instance();
        Block::append('header', $settings->header);
        Block::append('footer', $settings->footer);
    }

    public function componentDetails(): array
    {
        return [
            'name'        => 'dimsog.seo::lang.components.seo.name',
            'description' => ''
        ];
    }
}
