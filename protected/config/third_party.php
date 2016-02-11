<?php

/**
 * @param $class
 */
function ThirdPartyAutoload($class)
{
    $ClassArray = explode('\\', $class);

    //if (count($ClassArray)>1) {
        //if ($ClassArray[0] == 'ThirdParty') {

            if (isset($ClassArray[1])) {
                $FileLoad = \Kecik\Config::get('path.third_party') . '/' . $ClassArray[0] . '/' . $ClassArray[1] . '.php';
            } else {
                $FileLoad = \Kecik\Config::get('path.third_party') . '/' . $ClassArray[0] . '/' . $ClassArray[0] . '.php';
            }

            if (php_sapi_name() == 'cli') {
                $FileLoad = \Kecik\Config::get('path.basepath') . '/' . $FileLoad;
            }

            if (file_exists($FileLoad)) {
                include_once $FileLoad;
            } else {
                $FileLoad = \Kecik\Config::get('path.third_party') . '/' . $ClassArray[0] . '.php';

                if (file_exists($FileLoad)) {
                    include_once $FileLoad;
                }
            }
        //}
    //}
}

spl_autoload_register('ThirdPartyAutoload');