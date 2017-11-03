<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocatizationController extends Controller
{
    // localization function here
    public function index(Request $request, $locale) {
        // set's application's locale
        app()->setLocale($locale);

        // gets the translated message and displays it.
        echo trans('lang.msg');
    }
}
