<?php
class sf{
    public static function sum($m,$n){
        if($n==0){
            return $m;
        }
        $a = $m*$n;
        $b =($m&$n)<<1;
        return self::sum($a,$b);
    }
    
}
$res = sf::sum(1,2);
var_dump($res);


?>