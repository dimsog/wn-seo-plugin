<?php

return [
    'plugin' => [
        'name' => 'Seo',
        'description' => 'Seo плагин для WinterCMS'
    ],
    'components' => [
        'seo' => [
            'name' => 'Seo'
        ]
    ],
    'settings' => [
        'name' => 'Seo',
        'header_and_footer' => 'Head и Footer',
        'header' => 'Код в head',
        'footer' => 'Код в footer'
    ],
    'models' => [
        'general' => [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
        'redirect' => [
            'label' => 'Redirect',
            'label_plural' => 'Redirects',
            'code' => 'Код',
            'from' => 'Откуда',
            'to' => 'Куда'
        ],
    ]
];
