<?php

class Autoload
{
    private static $directories = [
        '',
        'app',
        ];

    public static function loader($className)
    {
        foreach (self::$directories as $directory) {
            $fileName = __DIR__ . '/' . ($directory ? $directory . '/' : '') . $className . '.php';
            if (file_exists ($fileName)) {
                include ($fileName);
                if (class_exists($className)) {
                    return true;
                }
            }
        }

        return false;
    }
}
