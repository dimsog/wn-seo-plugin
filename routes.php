<?php

use Illuminate\Support\Facades\Route;
use Dimsog\Seo\Classes\RobotsGenerator;
use Illuminate\Support\Facades\Response as ResponseFacade;
use Illuminate\Http\Response;

Route::get('/robots.txt', static function (): Response {
    $response = ResponseFacade::make((new RobotsGenerator())->generate());
    $response->header('Content-Type', 'text/plain');
    return $response;
});