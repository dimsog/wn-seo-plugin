<?php

declare(strict_types=1);

namespace Dimsog\Seo\Classes;

use Dimsog\Seo\Models\Settings;

class RobotsGenerator
{
    private Settings $settings;


    public function __construct()
    {
        $this->settings = Settings::instance();
    }

    public function generate(): string
    {
        $robots = (string) $this->settings->robots;
        if (empty($robots)) {
            $robots = $this->getDefaultRobots();
        }
        $robots = str_replace('$domain', config('app.url'), $robots);
        return $robots;
    }

    private function getDefaultRobots(): string
    {
        return "User-agent: *\nAllow: /\nHost: \$domain\nSitemap: \$domain/sitemap.xml";
    }
}