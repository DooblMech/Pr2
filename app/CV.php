<?php

namespace app;

class CV {
    const ITEM = 'item';
    const LIST = 'list';
    const DATA = 'data';
    const TYPE = 'type';

    public $data1 = [];


    public function __construct($data1)
    {
        $this->data1 = $data1;
    }
    public function buildHead()
    {
        $head = array();
        foreach ($this->data1 as $data) {
            $head[$data['destination']] = Consol::colorizeWeb($data['title'], 'red');
        }

        return $head;
    }
    public function buildContent()
    {
        $d = '';
       foreach ($this->data1 as $line) {

       //  var_dump($line) ;
           $label = isset($line['label']) ? $line['label'] : '';
if (is_array($line['data'])){
            switch ($line["data"]) {
                case self::ITEM:
                    $d .= '<b>'. Consol::colorizeWeb($label, 'red').'</b>'. ': '. implode(', ', $line['data']). "</br>";
                    break;
                case self::LIST:
                    foreach ($line['data'] as $key => $value) {
                        $list = is_array($value) ? implode(', ', $value) : $value;
                        $d .= $key .': '. $list . "</br>";
                    }
                    break;
                default:
                    if ($label == '') {
                        $d .= '<b>'.Consol::colorizeWeb($label, 'green').'</b>'.  $line['data']. "</br>";
                    }
                    else  { $d .= '<b>'.Consol::colorizeWeb($label, 'green').'</b>'.': '. $line['data']. "</br>"; }
            }

        }}

        return $d . PHP_EOL;
    }

}