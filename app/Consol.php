<?php
namespace app;
class Consol
{
    public  static $success  = "SUCCESS";
    public  static $failure = "FAILURE";
    public  static $warning = "WARNING";
    public  static $note = "NOTE";

    public  static function printLine(string $message, string $status = '') {
        echo php_sapi_name() == "cli" ?
            self::colorize($message, $status) :
            self::colorizeWeb($message, $status)
        ;
    }

    public static function colorizeWeb(string $text, string $status): string {
        switch($status) {
            case self::$success:
                $color = "green"; //Green background
                break;
            case self::$failure:
                $color = "red"; //Red background
                break;
            case self::$warning:
                $color = "yellow"; //Yellow background
                break;
            case self::$note:
                $color = "blue"; //Blue background
                break;
            default:
                $color = 'black';
        }
        return '<span style="color:' . $color .'">' . $text . '</span><br>';
    }

    private static function colorize(string $text, string $status): string {
        switch($status) {
            case self::$success:
                $out = "[42m"; //Green background
                break;
            case self::$failure:
                $out = "[41m"; //Red background
                break;
            case self::$warning:
                $out = "[43m"; //Yellow background
                break;
            case self::$note:
                $out = "[44m"; //Blue background
                break;
            default:
                return $text;
        }
        return chr(27) . "$out" . "$text" . chr(27) . "[0m" . "\n";
    }
}
