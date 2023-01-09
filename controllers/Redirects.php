<?php namespace Dimsog\Seo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Redirects Backend Controller
 */
class Redirects extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Dimsog.Seo', 'seo', 'redirects');
    }
}
