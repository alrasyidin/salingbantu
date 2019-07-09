<?php

if (!function_exists('str_rp')){
    function str_rp($angka){
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }
}