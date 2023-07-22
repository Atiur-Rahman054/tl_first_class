<?php 

//php array method

$array = [10, 15];
if(!empty($array)){//check for array is empty or not
    foreach($array as $val){
        echo "$val \n";
    }
}else{
    echo "Please insert element in array \n";
}

echo "\n";

$a = [];
if(isset($a)){//check the variable set or not
    echo "set";
}else{
    echo "not set";
}

echo "\n";

$a = 10;
$b = &$a;//copy by reference
$a = 50;
echo $b;

echo "\n";

$arr1 = [100, 200, 300];
array_push($arr1, 400);//add value in array at the end
array_unshift($arr1, 50);//add value in array at the first
print_r($arr1);

echo "\n";

$arr2 = [50, 40, 30];
array_pop($arr2);//remove value in array at the end
array_shift($arr2);//remove value in array at the first
print_r($arr2);

echo "\n";

unset($arr2[0]);//unset varible as undefined or unset array element
print_r($arr2);

echo "\n";

$arr3 = ["a" => "a", "b" => "b", "c" => "c"];
print_r($arr3);
$new_arr_value = array_values($arr3);//create a new array of the previous array with its data
$new_arr_keys = array_keys($arr3);//create a new array of the previous array keys
print_r($new_arr_value);
Print_r($new_arr_keys);

echo "\n";

$arr4 = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50];
$new_arr = array_chunk($arr4, 2, true);//creating an array and will create more arrays with 2 array element in it.  
print_r($new_arr);







echo "\n \n \n";
                // Home Task //
//Reverse string using for loop
function stringrev1($string){
    echo "Before rev = $string \n";
    $lenofString = strlen($string);//count string length
    echo "After rev = ";
    for($i = $lenofString - 1; $i >= 0; $i--){
        echo $string[$i];
    }
}
    stringrev1("Atik Hasan");


    echo "\n \n";

    //reverse string using for loop
    function revstring2($string){
        echo "Before reverse = $string \n";
        $arr = str_split($string);//string to array
        $revarray = array_reverse($arr);//reverse array
        $len = count($revarray);//count reverse array length
        echo "After reverse = ";
        for($i = 0; $i < $len; $i++){
            echo $revarray[$i];
        }
    }

    revstring2("javascript");

    echo "\n \n";


    //Reverse string using foreach loop
    function stringrev2($string){
        echo "Before reverse = $string \n";
        $arr = str_split($string);//convert string to array
        $revarr = array_reverse($arr);//reverse the array
        echo "After reverse = ";
        foreach($revarr as $rev){
            echo $rev;
        }
    }

    stringrev2("Bangladesh");

    echo "\n \n";






?>