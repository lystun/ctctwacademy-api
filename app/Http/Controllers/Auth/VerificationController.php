<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class VerificationController extends Controller
{

    public function verify($user_id, Request $request) {

        if (!$request->hasValidSignature()) {
            return response()->json(
                ["msg" => "Invalid/Expired url provided."],
                Response::HTTP_UNAUTHORIZED
            );
        }
    
        $user = User::findOrFail($user_id);
    
        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }
    
        return redirect()->to('/');
    }


    public function resend() {
        
        if (auth()->user()->hasVerifiedEmail()) {
            return response()->json(["msg" => "Email already verified."], Response::HTTP_BAD_REQUEST);
        }
    
        auth()->user()->sendEmailVerificationNotification();
        return response()->json(["msg" => "Email verification link sent on your email id"]);
    
    }

}
