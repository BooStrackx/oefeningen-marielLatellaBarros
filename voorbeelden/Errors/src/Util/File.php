<?php namespace Util;

class File {

    public static function readFile($fileName) {

        if (file_exists($fileName) && is_readable($fileName)){
            $file = fopen($fileName,'r');
            $contents = fread($file, filesize($fileName)); fclose($file);
            return $contents;
        } else {
            trigger_error("$fileName not correct",E_USER_ERROR);
        }
    }
}
