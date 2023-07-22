<?php
    $arr1 = [1, 1, 3, 2, 3];

    function singleval($arr){
        $result = $arr[1];
        foreach($arr as $single){
            $result = $result ^ $single;
            return $result;
        }

    }

    singleval($arr1);

    function lastwordcount($string){
        $words = explode(" ", $string);
        $lastWord = end($words);
        $lastWordLength = strlen($lastWord);
        
        echo "Length of the last word = " . $lastWordLength;
        
    }

    lastwordcount("Hello Bangladesh");

    
    function searchtarget($arr, $target){
        
        foreach($arr as $val){

        }
    }

    $arr2 = [10, 20, 50, 60];
    $target = 70;


    function mergearr($arr1, $arr2){

    }

    

?>