<?php

namespace App\Services;

class ImageManager {

    public static function getExtensions()
    {   
        return array( 
            "image/jpg", 
            "image/png", 
            "image/jpe", 
            "image/jpeg", 
            "image/jp2", 
            "image/tiff", 
            "image/jfif",
            "image/webp", 
            "image/svg", 
            "image/pjpeg", 
            "image/pjp", 
            "image/bmp", 
            "image/svgz"
        );
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

    public static function validateMime($file)
    {   
        $mime = false;
        if (function_exists("finfo_file")) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
            $mime = finfo_file($finfo, $file);
            finfo_close($finfo);
        } else if (function_exists("mime_content_type")) {
            $mime = mime_content_type($file);
        } else if (!stristr(ini_get("disable_functions"), "shell_exec")) {
            $file = escapeshellarg($file);
            $mime = shell_exec("file -bi " . $file);
        }
        return $mime;
    }

    public static function getSize($file)
    {
        $file_size = false;

        $file_size = @filesize($file);

        return $file_size;
    }

    public static function getImageSize($file)
    {
        $file_size = false;

        list($width, $height, $bits) = @getimagesize($file);

        return array("width" => $width, "height" => $height, "bits" => $bits);

    }

    public static function compressFile($file, $quality = 100, $destination = "temp_upload/temp_image.png", $resampled_size = array("width" => 100, "height" => 100))
    {
        $image = false;
        $return = false;
        $file_mime = self::validateMime($file);
        // $image_size = self::get_image_size($file);
        if ($file_mime == 'image/jpeg') 
            $image = imagecreatefromjpeg($file);
        elseif ($file_mime == 'image/gif') 
            $image = imagecreatefromgif($file);
        elseif ($file_mime == 'image/png') 
            $image = imagecreatefrompng($file);
        elseif ($file_mime == 'image/bmp') 
            $image = imagecreatefrombmp ($file);
        elseif ($file_mime == 'image/webp') 
            $image = imagecreatefromwebp($file);
        
        list($width_src, $height_src) = getimagesize($file);
        $ratio_src = $width_src/$height_src; 
        if ($resampled_size["width"]/$resampled_size["height"] > $ratio_src) { 
            $resampled_size["width"] = $resampled_size["height"] * $ratio_src; 
        } else { 
            $resampled_size["height"] = $resampled_size["width"] / $ratio_src; 
        } 
        
        if ($image !== false) {
            $resized = imagecreatetruecolor($resampled_size["width"], $resampled_size["height"]);
            imagecopyresampled($resized, $image, 0, 0, 0, 0, $resampled_size["width"], $resampled_size["height"], $width_src, $height_src);
            if (!empty($destination)) 
                $return = imagejpeg($image, $destination, $quality); 
        }

        return $return;
    }

    public static function reduceFile($file, $destination = "temp_upload/temp_image.png", $quality = 100)
    {
        $file_size = self::getSize($file);

        $return_file = false;
        if ($file_size <= (200 * 1024)) {
            $return_file = $file;
        } else {
            $quality = round(((200 * 1024)/$file_size) * $quality);
            $return_file = self::compressFile($file, $quality, $destination);
            if ($return_file === true) {
                $return_file = $destination;
            }
        }
        return  $return_file;
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