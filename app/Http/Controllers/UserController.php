<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
	public function login(UserLoginRequest $request) {

		// dd($request->cookies);

        if($request->callback == 'unauthorized') {
            return response()->json([ 'message' => 'Maaf akun ini tidak tersedia X !!' ], 422);
        }

        $token = (\Session::get('token'));
        $csrf_token = (\Session::get('csrf_token'));

        return (new UserResource(JWTAuth::user()))
			->additional([
				'meta' => [
					'token' => $token,
					'exp'	=> config('jwt.ttl'),
				],
			])
            ->response()
            ->header('Access-Control-Expose-Headers', 'Csrf-Token')
            ->header('Csrf-Token', $csrf_token)
	        ->withCookie(
	            'token', 
                // JWTAuth::getToken(),
                $token,
	            config('jwt.ttl'), 
	            '/'
	    );		
	}

    // public function login2(UserLoginRequest $request) {
    //     $credentials = $request->only('email', 'password');

    //     try {
    //         if (! $token = JWTAuth::attempt($credentials)) {
    //             return response()->json(['error' => 'invalid_credentials'], 400);
    //         }
    //     } catch (JWTException $e) {
    //         return response()->json(['error' => 'could_not_create_token'], 500);
    //     }

    //     return response()->json(compact('token'));
    // }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function getAuthenticatedUser() {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        return response()->json(compact('user'));
    }
}