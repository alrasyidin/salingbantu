<?php

if (!function_exists('str_rp')){
    function str_rp($angka){
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }
}

if (!function_exists('trs_sts')){
    function trs_sts($code){
        switch ($code) {
            case 0:
                return '<span class="badge badge-primary">Menunggu Konfirmasi</span>';
            break;
            case 1:
                return '<span class="badge badge-warning">Konfirmasi diajukan</span>';
            break;
            case 3:
                return '<span class="badge badge-sucess">Disetujui</span>';
                break;
            case 4:
                return '<span class="badge badge-danger">Ditolak/span>';
                break;
            default:
                return 'Function error';
        }
    }
}
if (!function_exists('setActive')){
function setActive($path, $active = 'active'){
    return call_user_func_array('Request::is', (array) $path) ? $active : '';
  }
}
