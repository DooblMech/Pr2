<pre>
<?php
require_once(__DIR__ . '/Autoloader.php');
spl_autoload_register(['Autoload', 'loader']);

$item = require_once(__DIR__ . '/data.php');
foreach ($item as $key) {
    $da1 = (new \app\CV)->buildHead($key);
    echo($da1. '<br>');
    foreach ($key as $key1) {


            $da = (new \app\CV)->buildContent($key1);

       // echo($da);

    }
}


