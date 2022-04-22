<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class MyFirstController extends Controller
{
    public function getdatabase(){
        echo "duy gda goi dc ham get db";
    }
}