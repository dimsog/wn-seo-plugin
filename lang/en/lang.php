<?php

return [
    'plugin' => [
        'name' => 'Seo',
        'description' => 'Seo plugin for WinterCMS',
    ],
    'components' => [
        'seo' => [
            'name' => 'Seo',
        ],
    ],
    'settings' => [
        'name' => 'Seo',
        'header_and_footer' => 'Head and Footer',
        'header' => 'Head code',
        'footer' => 'Footer code',
        'robots' => 'Robots.txt',
    ],
    'models' => [
        'general' => [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
    ],
];
