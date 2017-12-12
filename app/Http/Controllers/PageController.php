<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use View;

class PageController extends Controller
{

    public function showView($name)
    {
        if(View::exists($name)){
            return view($name);
        }
        else{
            return "404: No se encontro la pagina solicitada";
        }
    }

}
