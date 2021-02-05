<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CustomValidator {

    public static function init_validator()
    {
        
        Validator::extend('user_phone_exists', function ($attribute, $value, $parameters) {
            $user_exist = User::where('phone',$value)->get()->first();
            return !empty($user_exist) && !empty($user_exist->phone) ? false : true;
        });
        
        Validator::replacer('user_phone_exists', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'phone number is already in use');
        });
        
        Validator::extend('password_matched', function ($attribute, $value, $parameters) {
            $user_exist = User::where([
                ['password', '=', Hash::make($value)],
                ['id', '=', auth()->user()->id]
            ])->get()->first();
            return !empty($user_exist) && !empty($user_exist->email) ? true : false;
        });
        
        Validator::replacer('password_matched', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'invalid user password');
        });
    }
}