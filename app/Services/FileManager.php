<?php

namespace App\Services;

use App\Services\ImageManager;
use App\Services\VideoManager;

class FileManager {
    
    public static function getMediaType($file)
    {
        // image, video
        $file_type = ImageManager::isImage($file) ? "image" : (VideoManager::isVideo($file) ? "video" : false) ;
        return $file_type;
    }

    public static function deleteFile($file_path)
    { 
        if (isset($file_path) && self::isFile($file_path)) {
            @unlink($file_path);
        }
        return $file_path;
    }
    
    public static function makePath($path, $type = 0777, $active = true)
    {
        $return = false;
        if( !empty($path) && !file_exists($path) ){
            mkdir($path, $type, $active);
            $return = $path;
        }
        return $return;
    }

    public static function isFile($file)
    {
        return !empty($file) && is_file($file) && file_exists($file);
    }

    public static function isDir($file)
    {
        return !empty($file) && is_dir($file) && file_exists($file);
    }
}