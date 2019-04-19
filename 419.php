<?php

function index($n,$m){
    if($n<1 || $m<1){
        return -1;
    }
    if($n==1){
        return 0;
    }
    return (index($n-1,$m)+$m)%$n;
}
index(4,3);









?>