<?php
class sf{
    public function num($n){
        $str = decbin($n);
        $res = substr_count($str,1);
        return $res;
    }
}
var_dump(num(2));