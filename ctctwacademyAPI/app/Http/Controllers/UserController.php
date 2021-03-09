<?php

namespace App\Http\Controllers;

use App\Post;
use App\Role;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{

    public function allUsers(){

        $users = User::latest()->get();
        return UserResource::collection($users);
        
    }

    public function register(){
        
    }
   

}
