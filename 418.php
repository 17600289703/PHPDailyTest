<?php
class Admin{
    public static function day7($index){
        while ($index%2 ==0){
            $index/=2;
        }
        while ($index%3 ==0){
            $index/=3;
        }
        while ($index/5 ==0){
            $index/=5;
        }
        if($index==1){
            return true;
        }else{
            return false;
        }
    }
    function index(){
        $max = 100;
        for ($i=1;$i<=$max;$i++){
            if(Admin::day7($i)){
                echo $i.'是丑数';
                echo '</br>';
            }
        }
    }

}

index();



?>