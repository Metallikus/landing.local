<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function show() {
        //$data = array('title'=>'МЕГАЛЭНДИНГ!!!!');
        $view = View('about');
        $view->with('title','О ЛЭДИНГЕ!!!!');
        return $view;
    }
}
