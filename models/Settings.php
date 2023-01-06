<?php

declare(strict_types=1);

namespace Dimsog\Seo\Models;

use System\Behaviors\SettingsModel;
use Winter\Storm\Database\Model;

/**
 * @property string|null $header
 * @property string|null $footer
 */
class Settings extends Model
{
    public $implement = [SettingsModel::class];

    public $settingsCode = 'dimsog_seo';

    public $settingsFields = 'fields.yaml';
}
