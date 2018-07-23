<?php

namespace Botble\Demo\Http\Controllers;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return view('botble-demo::index');
    }
}