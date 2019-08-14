<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SnapLibStringU
{
    public static function boolToString($b)
    {
        return ($b ? 'true' : 'false');
    }

    public static function truncateString($s, $maxWidth)
    {
        if(strlen($s) > $maxWidth)
        {
            $s = substr($s, 0, $maxWidth - 3) . '...';
        }

        return $s;
    }
}