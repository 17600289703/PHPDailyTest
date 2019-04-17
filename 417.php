<?php
$n=100;
$m=1300;
$sum=0;
$list = [];
for ($n;$n<=$m;$n++){
    $arr = str_split($n,1);
    foreach ($arr as $k => $v){
        if($v==1){
            $sum++;
            $list[]=$n;
        }
    }
}
echo $sum;

















?>