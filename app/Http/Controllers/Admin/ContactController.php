<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

    //
    public function show(Request $request) {
        //$data = array('title'=>'МЕГАЛЭНДИНГ!!!!');
        //print_r($request->all());
        $title = 'Контакты';
        if ($request->has('name')) {
             $title = $request->name;
        }
        if ($request->isMethod('post')) {
            $request->flash();
        }
        $view = View('contact');
        $view->with('title', $title);
        return $view;
    }

}
