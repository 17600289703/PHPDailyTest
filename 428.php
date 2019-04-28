<?php
class test{

    public static function find($target,$array){
        if($array[0][0]>$target){
            return false;
        }
        $arr1 = array_pop($array);
        $last = array_pop($arr1);
        if($last<$target){
            return false;
        }
        foreach($array as $k => $v){
            if($last<$target){
                unset($array[$k]);
                continue;
            }
            if($v[0]>$target){
                $array = array_slice($array);
                break;
            }
        }
        return $array;
    }

}
?>