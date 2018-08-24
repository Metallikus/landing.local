<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    public function __construct() {
        
    }

    //
    public function getArticles() {
        echo "getArticles";
    }
    
    public function getArticle($page) {
        echo $page;
    }
}
