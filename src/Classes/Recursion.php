<?php

namespace src\Classes;

class Recursion
{
    /**
     * reverse
     *
     * @param string $str
     * 
     * @return string
     */
    public static function reverseString(string $str): string
    {
        return strrev($str);
    }

    /**
     * countAll
     *
     * @param mixed $str
     * 
     * @return array
     */
    public static function countAll($str): array
    {
        $numeric = preg_replace('/[^0-9]/', '', $str);
        $letters = preg_replace('/[^A-Za-z]/', '', $str);

        return ['LETTERS' => strlen($letters), 'DIGITS' => strlen($numeric)];
    }
}
