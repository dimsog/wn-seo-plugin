<?php

declare(strict_types=1);

namespace Dimsog\Seo\Models;

use Model;
use System\Behaviors\SettingsModel;

class Settings extends Model
{
    public $implement = [SettingsModel::class];

    public $settingsCode = 'dimsog_seo';

    public $settingsFields = 'fields.yaml';
}
