<?php 

                    //array//

    
    //array syntex
    //1. array(data);
    //2. [data];

    //Example:
    $arr = array(10, 20, "Atik");//index array
    $arr2 = [20, 30, true, "Hasan", 10, 50];//index array
    print_r($arr);
    echo $arr2[2];
    // echo true + 1; output = 2
    echo "\n";
    echo "total element of arr = " . count($arr) . "\n";
    echo "\n";
    for($i = 0; $i < count($arr2); $i++){
        echo $arr2[$i] . "\n";
    }

    echo "\n";

    foreach($arr as $value){
        echo $value . "\n";
    }

    echo "\n";
    //associative array
    $arr3 = ["a" => "Atik", "0" => 10, "b" => "Hasan", "3" => 20, 30];
    foreach($arr3 as $key => $value){
        echo "$key = $value \n";
    }

    echo "\n";

    $user = [
        "name" => "Atik",
        "email" => "atik@gmail.com",
        "age" => 22
    ];
    foreach($user as $key => $value){
        echo "$key = $value \n";
    }
    echo "\n";

    //multidimensional array
    $arr4 = [
        10,
        20,
        [100, 200, 300],
        30
    ];

    echo $arr4[2][0] . "\n";
    echo "\n";

    $arr5 = [//multidimensional array
        [10, 20, 30],
        [100, 200, 300],
    ];
    foreach($arr5 as $key1 => $arr){
        foreach($arr as $key2 => $value){
            echo "Index $key1$key2 = $value \n";
        }
    }

    echo "\n";
    $arr6 = [50, 10, 30, 5, 60, 70];
    sort($arr6);//asending sort
    print_r($arr6);
    rsort($arr6);//discending sort
    print_r($arr6);
    $arr7 = [
        "a" => 20,
        "c" => 10,
        "b" => 30
    ];
    asort($arr7);//arsort for discending sort
    print_r($arr7);

    ksort($arr7);//kr sort for descending sort
    print_r($arr7);

    echo "\n";



    
    $arrs = [
        10,
        20,
        30,
        [100, 200, 300],
        40,
        50,
        [5, 20, 30, [2, 3]]
    ];

    foreach($arrs as $first){
        if(is_array($first)){
            foreach($first as $second){
                if(is_array($second)){
                    foreach($second as $third){
                        echo "$third \n";
                    }
                }else{
                    echo "$second \n";
                }
            }
        }else{
            echo "$first \n";
        }
    }

    echo "\n";

    //Multidimensional array element print using function
    function arrElement($values){
        foreach($values as $value){
            if(is_array($value)){
                arrElement($value);
            }else{
                echo "$value \n";
            }
        }
    }

    arrElement($arrs);

    echo "\n";

                // Home Task //
    //multiply all the array element using function
    function multiply($datas){
        $result = 1;
        foreach($datas as $data){
            $result *= $data;
        }
        return $result;
    }

    $array1 = [5, 10, 2, 10];
    $result = multiply($array1);
    echo "Multiply = $result \n";

    echo "\n";

    //create an array and findout all odd and even element in that array

    $array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach($array2 as $data){
        if($data % 2 == 0){
            echo "$data is even \n";
        }else{
            echo "$data is odd \n";
        }
    }

    echo "\n";

    





?>