<?php
    function prosti($broj){
        if ($broj<=1){
            return false;
        }
        for ($i=2; $i<=sqrt($broj); $i++){
            if ($broj % $i == 0){
                return false;
            }
        }
        return true;
    }

    for ($i = 2; $i<100; $i++){
        if (prosti($i)){
            echo $i . " ";
        }
    }
?>