<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SnapLibGeneralU
{
    public static function getArrayValue(&$array, $key, $required=true, $default=null)
    {
        if(array_key_exists($key, $array))
        {
            return $array[$key];
        } else {
            if($required) {
                throw new Exception("Key {$key} not present in array");
            } else {
                return $default;
            }

        }
    }

    public static function getCallingFunctionName()
    {
        $callers = debug_backtrace();
        $functionName = $callers[2]['function'];
        $className    = isset($callers[2]['class']) ? $callers[2]['class'] : '';

        return "{$className}::{$functionName}";
    }

    public static function getWorkPercent($startingPercent, $endingPercent, $totalTaskCount, $currentTaskCount)
    {
        if($totalTaskCount > 0) {
            $percent = floor($startingPercent + (($endingPercent - $startingPercent) * ($currentTaskCount / (float) $totalTaskCount)));
        }
        else {
            $percent = 0;
        }

        return $percent;
    }
}