<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Users;
class UserController extends Controller
{
    function index(){
      dd(Users::all());
    }
}
