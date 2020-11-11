<?php

namespace Khusainov\SuperModule\Controllers;

use App\Http\Controllers\Controller;

class SuperModuleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function greeting()
    {
        return view('SuperModule::super');
    }
}
