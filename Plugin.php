<?php

declare(strict_types=1);

namespace Dimsog\Seo;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'dimsog.seo::lang.plugin.name',
            'description' => 'dimsog.seo::lang.plugin.description',
            'author'      => 'Dimsog',
            'icon'        => 'icon-search'
        ];
    }

    public function registerSettings(): array
    {
        return [
            'seo' => [
                'label' => 'dimsog.seo::lang.settings.name',
                'description' => '',
                'category' => 'dimsog.seo::lang.settings.name',
                'icon' => 'icon-search',
                'class' => Settings::class,
                'order' => 500,
                'keywords' => 'seo',
                'permissions' => []
            ]
        ];
    }
}
