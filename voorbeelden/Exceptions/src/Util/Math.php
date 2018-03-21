<?php namespace Util;

class Math
{
    public static function sum()  {
        $arguments = func_get_args();
        $sum = 0;
        foreach ($arguments as $argument) {
            if (is_numeric($argument)) {
                $sum+=$argument;
            } else {
                throw new \Exception("$argument is not numeric");
            }
        }

        return $sum;
    }

}