<pre>
<?php
require_once(__DIR__ . '/Autoloader.php');
spl_autoload_register(['Autoload', 'loader']);

$item = require_once(__DIR__ . '/data.php');
foreach ($item as $key) {

    $da = (new \app\CV($key))->buildContent();

}

//var_dump($item);
