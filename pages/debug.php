<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    function debug($string) {

    ob_start();
    $var = func_get_args();
    call_user_func_array('var_dump', $var);
    $string = ob_get_clean();

    if ($fp = fopen("../elog/debug.txt", "a+")) {
        fwrite($fp, $string . "\n");
        fclose($fp);
    }
}
