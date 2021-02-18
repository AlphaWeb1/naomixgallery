<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Services\ImageManager;
use App\Services\VideoManager;
use App\Services\FileManager;
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
        
        Validator::extend('gallery_category', function ($attribute, $value, $parameters) {
            return !in_array($value, array("abstract", "collection", "miniature", "portrait")) ? false : true;
        });
        
        Validator::replacer('gallery_category', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'select a valid gallery category');
        });
        
        Validator::extend('validate_file_image', function ($attribute, $value, $parameters) {
            $ret = true;
            if ( 
                !empty(request()->file('file')) && (!FileManager::isFile(request()->file('file')) || !ImageManager::isImage(request()->file('file')))
            ){
                $ret = false;
            }
            return $ret;
        });
        
        Validator::replacer('validate_file_image', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'kindly upload a valid image');
        });
        
        Validator::extend('validate_file_video', function ($attribute, $value, $parameters) {
            $ret = true;
            if ( 
                !empty(request()->file('file')) && (!FileManager::isFile(request()->file('file')) || !VideoManager::isVideo(request()->file('file')))
            ){
                $ret = false;
            }
            return $ret;
        });
        
        Validator::replacer('validate_file_video', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'kindly upload a valid video');
        });
        
        Validator::extend('validate_image_video', function ($attribute, $value, $parameters) {
            $ret = true;
            if ( 
                !empty(request()->file('file')) && ( !FileManager::isFile(request()->file('file')) || 
                (!VideoManager::isVideo(request()->file('file')) && !ImageManager::isImage(request()->file('file'))) )
            ){
                $ret = false;
            }
            return $ret;
        });
        
        Validator::replacer('validate_image_video', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'kindly upload a valid image or video');
        });
        
        Validator::extend('validate_file', function ($attribute, $value, $parameters) {
            $ret = true;
            if ( empty(request()->file('file')) || !FileManager::isFile(request()->file('file')) ) {
                $ret = true;
            }
            return $ret;
        });
        
        Validator::replacer('validate_file', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'kindly upload a file');
        });
    }
}