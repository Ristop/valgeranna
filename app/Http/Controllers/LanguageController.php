<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Config;


class LanguageController extends Controller
{
    public function switchLang($lang) {
        if(array_key_exists($lang, Config::get('languages'))) {
            Session::set('applocale', $lang);
        }
        return Redirect::back();
    }
    //
}
