<?php

namespace App\Services;

class VideoManager {

    public static function getExtensions()
    {   
        return array( 
            'video/3gpp2',
            'video/3gpp',
            'video/quicktime',
            'video/x-flv',
            'video/mpeg',
            'video/x-msvideo',
            'video/ogg',
            'video/webm',
            'video/mp2t',
            'video/flv',
            'video/vn.rn-realmedia',
            'video/mpeg-2',
            'video/mp4',
            'video/mp4v-es',
            'video/vn.rn-realvideo',
            'video/x-sgi-movie',
            'video/ogm',
            'video/divx',
            'video/annodex',
            'video/vnd.vivo',
            'application/mp4',
            'application/vnd.rn-realmedia',
            'application/ogg',
            'application/x-materoska',
            'application/annodex',
        );
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

    public static function isVideo($file)
    {
        return in_array(strtolower(self::validateMime($file)) , self::getExtensions());
    }

}