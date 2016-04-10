<?php
/**
 * Created by PhpStorm.
 * User: Kadi
 * Date: 4/8/2016
 * Time: 7:56 PM
 */
namespace App\Http\Controllers;
use App\Http\Requests;

class BankController extends Controller{
    public function callback(){
        $returnmessage = 'Donation successfully made';
        return response()->view('pages.bankredirect', ['message' => $returnmessage])->header('X-CSRF-TOKEN', csrf_token());
    }

    public function cancel(){
        $returnmessage = 'Donation cancelled';
        return response()->view('pages.bankredirect', ['message' => $returnmessage])->header('X-CSRF-TOKEN', csrf_token());
    }

}