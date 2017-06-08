<?php
/**
 * Created by PhpStorm.
 * User: guoxiaoqiang
 * Date: 2017/6/8
 * Time: 下午4:19
 */

define('NIM_ROOT',dirname(__FILE__)."/");
function nimAutoload($classname){
    $parts = explode('\\',$classname);
    $path = NIM_ROOT.implode('/',$parts).'.php';
    if(file_exists($path)){
        include ($path);
    }
}

spl_autoload_register('nimAutoload');