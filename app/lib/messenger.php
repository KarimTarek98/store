<?php
namespace PHPMVC\LIB;

class Messenger
{
    private static $_instance;
    private function __construct() {}
    private function __clone() {}
    public static function gtInstance()
    {
        if (self::$_instance === null)
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}