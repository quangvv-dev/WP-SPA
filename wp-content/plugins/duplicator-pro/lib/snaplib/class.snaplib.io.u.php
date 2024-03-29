<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SnapLibIOU
{
    public static function rmPattern($filePathPattern)
    {
        @array_map('unlink', glob($filePathPattern));
    }

    public static function chmodPattern($filePathPattern, $mode)
    {
        $filePaths = glob($filePathPattern);

        $modes = array();

        foreach($filePaths as $filePath)
        {
            $modes[] = $mode;
        }

        @array_map('chmod', $filePaths, $modes);
    }

    public static function safePath($path, $real = false)
    {       
        if($real) {
            $path = realpath($path);
        }

        return str_replace("\\", "/", $path);
    }

    public static function fopen($filepath, $mode, $throwOnError = true)
    {
        if (($mode === 'w') || ($mode === 'w+') || ($mode === 'c+') || file_exists($filepath)) {
            $file_handle = @fopen($filepath, $mode);
        } else {
            if($throwOnError) {
                throw new Exception("$filepath doesn't exist");
            } else {
                return false;
            }
        }

        if ($file_handle === false) {
            if($throwOnError) {
                throw new Exception("Error opening $filepath");
            } else {
                return false;
            }
        } else {
            return $file_handle;
        }
    }

    public static function touch($filepath, $time = null)
    {
        if ($time === null) {
            $time = time();
        }

        if (@touch($filepath, $time) === null) {
            throw new Exception("Couldn't update time on {$filepath}");
        }
    }

    public static function rm($filepath, $mustExist = false)
    {
        if (file_exists($filepath)) {
            @chmod($filepath, 0644);
            if (@unlink($filepath) === false) {
                throw new Exception("Couldn't remove {$filepath}");
            }
        } else if ($mustExist) {
            throw new Exception("{$filepath} doesn't exist");
        }
    }

    public static function fwrite($handle, $string)
    {
        $bytes_written = fwrite($handle, $string);

        if ($bytes_written === false) {
            throw new Exception('Error writing to file.');
        } else {
            return $bytes_written;
        }
    }

    public static function fgets($handle, $length)
    {
        $line = fgets($handle, $length);

        if ($line === false) {
            throw new Exception('Error reading line.');
        }

        return $line;
    }

    public static function fclose($handle, $exception_on_fail = true)
    {
        if ((@fclose($handle) === false) && $exception_on_fail) {
            throw new Exception("Error closing file");
        }
    }

    public static function flock($handle, $operation)
    {
        if (@flock($handle, $operation) === false) {
            throw new Exception("Error locking file");
        }
    }

    public static function ftell($file_handle)
    {
        $position = @ftell($file_handle);

        if ($position === false) {
            throw new Exception("Couldn't retrieve file offset for $filepath");
        } else {
            return $position;
        }
    }

    static function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir."/".$object))
                    {
                        SnapLibIOU::rrmdir($dir."/".$object);
                    }
                    else
                    {
                        //unlink($dir."/".$object);
                        self::rm($dir."/".$object);
                    }
                }
            }
            rmdir($dir);
        }
    }

    public static function filesize($filename)
    {
        $file_size = @filesize($filename);

        if ($file_size === false) {
            throw new Exception("Error retrieving file size of $filename");
        }

        return $file_size;
    }

    public static function fseek($handle, $offset, $whence = SEEK_SET)
    {
        $ret_val = @fseek($handle, $offset, $whence);

        if ($ret_val !== 0) {
            if ($ret_val === false) {
                throw new Exception("Trying to fseek($offset, $whence) and came back false");
            } else {
                throw new Exception("Error seeking to file offset $offset. Retval = $ret_val");
            }
        }
    }

    public static function filemtime($filename)
    {
        $mtime = filemtime($filename);

        if ($mtime === E_WARNING) {
            throw new Exception("Cannot retrieve last modified time of $filename");
        }

        return $mtime;
    }

    public static function mkdir($pathname, $mode, $recursive)
    {
        if (!file_exists($pathname)) {
            if (@mkdir($pathname, $mode, $recursive) === false) {
                throw new Exception("Error creating directory {$pathname}");
            }
        } else {
            if (@chmod($pathname, $mode) === false) {
                throw new Exception("Error setting mode on directory {$pathname}");
            }
        }
    }
}