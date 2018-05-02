<?php

namespace app;

class CV
{
    const ITEM = 'item';
    const LIST = 'list';
    const DATA = 'data';
    const TYPE = 'type';

    public $data1 = [];


    /*  public function __construct($data1)
      {
          $this->data1 = $data1;
      }*/

    public function buildHead($data)
    {


        $head = Consol::colorizeWeb($data['title'], 'red');

        return $head;
    }

    public function buildContent($a)
    {
        $d = [];

        if (is_array($a)) {
            foreach ($a as $b) {
                if (is_array($b)) {

                $label = isset($b['label']) ? $b['label'] : '';


                switch ($b['data']) {
                    case self::ITEM:
                        $d .= '<b>' . Consol::colorizeWeb($label, 'yellow') . '</b>' . ': ' . implode(', ', $b['data']) . "</br>";
                        break;
                    case self::LIST:
                        foreach ($b['data'] as $key => $value) {
                            $list = is_array($value) ? implode(', ', $value) : $value;
                            $d .= $key . ': ' . $list . "</br>";
                        }
                        break;
                    default:
                        if ($label == '') {
                            $d .= '<b>' . Consol::colorizeWeb($label, 'green') . '</b>' . $b['data'] . "</br>";
                        } else {
                            $d .= '<b>' . Consol::colorizeWeb($label, 'green') . '</b>' . ': ' . $b['data'] . "</br>";
                        }
                }

            }
        }} else {
            $d = NULL;
        };

      if ($d !== 'Array'){echo $d;}
        return $d . PHP_EOL;


    }
}