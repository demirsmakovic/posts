<?php
use Carbon\Carbon;

if(!function_exists("convert")){

    function convert($data){
        return Carbon::parse($data)->format('d/m/y');
    }
}

?>