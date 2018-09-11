<?php
namespace PHPMVC\LIB;
class AutoLoad
{
    public static function autoload($name)
    {
        // remove PHPMVC namespace
        $name = str_replace('PHPMVC' , '' , $name);
        $name = str_replace('\\' , '/' , $name);
        $name = strtolower($name);
        $name = $name . '.php';
        if (!file_exists(APP_PATH  . $name))
        {
            return;
        }
        require_once APP_PATH  . $name;
    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');