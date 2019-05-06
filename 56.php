<?php
class sf{
    function day20($x,$y){
        for ($i=0;$i<=$x;$i++){
            $f[$i][0] = 1;
        }
        for ($i=0;$i<=$y;$i++){
            $f[0][$i] = 1;
        }
        for($i=1;$i<$x;$i++){
            for ($j=1;$j<=$y;$j++){
                $f[$i][$j] = $f[$i-1][$j] + $f[$i][$j];
            }
        }
    }
}












?>