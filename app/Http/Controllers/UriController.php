<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UriController extends Controller
{
    public function index(Request $request) {
        // Usage of path method
        $path = $request->path();
        echo 'Path method: '.$path."<br />";

        // Usage of is method
        $pattern = $request->is('foo/*');
        echo 'is method: '.$pattern.'<br />';

        // Usage of url method
        $url = $request->url();
        echo 'URL method: '.$url;
    }
}
