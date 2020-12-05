<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use JWTAuth;
use Session;

class UserLoginRequest extends FormRequest {

	/*
  Pastikan nilai kembalian dari method authorize() adalah true untuk memastikan pengguna dapat melanjutkan ke proses validasi.
  Method authorize() ini nantinya dapat digunakan dalam berbagai keperluan, semisal hanya pengguna yang sudah login yang dapat
  mengisi formulir dan melanjutkan proses validasi.
	*/

	public $callback = null;

	public function authorize() : bool {

        $credentials = [
            'email'	=> $this->email, 
            'password'	=> $this->password,
        ];

        $csrf_token = Str::random(32);
        $token = JWTAuth::claims(['csrf-token' => $csrf_token])
            ->attempt($credentials);

        if ($token) {
            Session::flash('token', $token);
            Session::flash('csrf_token', $csrf_token);
            return true;
        }

        return false;
	    
	}

	public function rules() {
		return [
			'email' => 'required',
			'password' => 'required|min:1',
		];
	}

	// i love this
	public function messages(){
        return [
            'email.required' => 'A title is required',
            'password.required'  => 'A message is required',
        ];
	}	

	# i love like this
    public function validateResolved() {

        $validator = $this->getValidatorInstance();

        if ($validator->fails()) {
            $this->failedValidation($validator);
        }

        if (!$this->passesAuthorization()) { // merujuk pada authorize() di atas
            $this->callback = 'unauthorized';
            // throw new AuthorizationException('Maaf akun ini tidak tersedia X !!');
            // $this->failedAuthorization();
        }
    }    

    // protected function failedAuthorization()
    // {
    //     throw new AuthorizationException('Maaf akun ini tidak tersedia !!');
    //     exit;
    // }

	// i dont love this
	// public function withValidator($validator)
	// {

	//     $validator->after(function ($validator) {
	//         // if ($this->somethingElseIsInvalid()) {
	//             $validator->errors()->add('field', 'Something is wrong with this field!');
	//         // }
	//     });
	// }
	

}
