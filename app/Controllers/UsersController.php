<?php 

namespace App\Controllers;

use App\Controllers\Controller;

Class UsersController extends Controller{


    public function index(){
        
        return view("users/user",[
            "data" => "Hello Data"
        ]);
    }
    
}