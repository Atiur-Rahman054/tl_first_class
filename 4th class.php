<?php
    // php loop iteration
    // for loop
    // while loop
    // do while loop
    // foreach loop
    
//     //             Class_04 - Homework//

// //     for loop syntex

// //     // for(initialize;condition;increment or decrement){
// //     //     statement;
// //     // }

// //     // example

//     for($i = 0; $i <= 5; $i++){
//         echo $i . "\n";
//     }

//     echo "\n";


// //     //while loop syntex

// //     //initialize;
// //     // while(condition){
// //     //     statement;
// //     //     increment or decrement;
// //     // }

// //     //Example

//     $j = 0;
//     while($j <= 5){
//         echo $j . "\n";
//         $j++;
//     }

//     echo "\n";

// //     //do while loop syntex

// //     // initialize;
// //     // do{
// //     //     statement;
// //     //     increment or decrement;
// //     // }while(condition);

// //     //Example

//     $k = 0;
//     do{
//         echo $k . "\n";
//         $k++;
//     }while($k > 5);

//     echo "\n";

// //     //foreach loop syntex

// //     //foreach(arrayname as variable){
// //     //     statement;
// //     // }

// //     //Example

//     $arr = [5,10,15];//foreach loop basically use for array and object data
//     foreach($arr as $a){
//         echo $a . "\n";
//     }

//     echo "\n";

//     $year = date('Y');//get runnig year from this method
//     for($year; $year >= 2020; $year--){
//          echo $year . "\n";
//     }

//     echo "\n";

//     for($val = 0; $val <= 10; $val += 2){// increase with two
//         echo $val . "\n";
//     }

//     echo "\n";

//     for($n = 1; $n <= 10; $n++){
//         echo "1 * $n = ". 1 * $n . "\n";
//     }

//     echo "\n";

//     for($m = 1; $m <= 5; $m++){
//         for($o = 1; $o <= 10; $o++){
//             echo "$m * $o = " . $m * $o . "\n";
//         }
//         echo "\n";
//     }

//     echo "\n";

//     // php break and continue 
//     for($s = 1; $s <= 5; $s++){
//         if($s == 3){
//             break;//exit will work similar as break
//         }
//         echo $s . "\n"; 
//     }

//     echo "\n";

    // for($t = 1; $t <= 5; $t++){
    //     if($t == 3){
    //         continue;
    //     }
    //     echo $t . "\n";
    // }
    
    // echo "\n";
    
//     **Problem */
    // $z = 1;
    // while($z <= 10){
    //     if($z%2 != 0){
    //         $z++;
    //         continue;
    //     }
    //     echo $z . "\n";
    //     $z++;
    // }

    // echo "\n";

    // for($z = 1; $z <= 10; $z++){
    //     if($z%2 != 0){
    //         continue;
    //     }
    //     echo "$z \n";
    // }

    // echo "\n";








//                 Home Task//

    
//     //Fibonacci series using for loop
//     $a = 0;
//     $b = 1;
//     echo "Fibo series = " . $a . " " . $b . " ";
//     for($i = 0; $i <= 5;$i++){
//         $sum = $a + $b;
//         $a = $b;
//         $b = $sum;
//         echo $sum . " ";
//     }

//     echo "\n";

//     //Fibonacci series using do while loop

//     $c = 0;
//     $d = 1;
//     $j = 0;
//     echo "Fibo Series = " . $c . " " . $d . " ";
//     do{
//         $sum = $c + $d;
//         $c = $d;
//         $d = $sum;
//         echo $sum . " ";
//         $j++;

//     }
//     while($j <=5);

//     echo "\n";

//      //Factorial value using for loop

    $f = 5;
    $factorial = 1;
    for($k = $f; $k >= 1; $k--){
        echo $factorial . " * " . $k . "= ";
        $factorial = $factorial * $k;
        echo $factorial . "\n";

    }
    echo "Factorial of $f = ". $factorial . "\n";

//     echo "\n";

//     //Create a pyramid using for loop

//     for($p = 0; $p <= 7; $p++){
//         for($q = 0;$q <= $p; $q++){
//             echo "* ";
//         }
//         echo "\n";
        
//     }

//     echo "\n";

//     //check all odd and even number form 1-100 using for loop

//     for($l = 1; $l <= 100; $l++){
//         if($l%2 == 0){
//             echo "$l is a even number \n";
//         }else{
//             echo "$l is a odd number \n";
//         }
//     }

//     echo "\n";

//     //display 1-10 with a '#' using while loop

//    $initialize = 1;
//    while($initialize <= 10){
//     echo "$initialize#";
//     $initialize++;
//    }


//Try something else

// for($i = 1; $i <= 7; $i++){ //reverse pyramid
//     for($j = 7; $j >= $i; $j--){
//         echo "* ";
//     }
//     echo "\n";
// }

// echo "\n";

// for($i = 0; $i <= 3; $i++){ //squre pattern
//     for($j = 0; $j <= 3; $j++){
//         echo "* ";
//     }
//     echo "\n";
// }

// echo "\n";

// for($i = 0; $i <= 5; $i++){// triangle
//     for($j = 0; $j <= 5 - $i; $j++){
//         echo " ";
//     }
//     for($k = 0; $k <= $i; $k++){
//         echo "* ";
//     }
//     echo "\n";
// }

// echo "\n";

// for($i = 1; $i <= 5; $i++){
//     for($j =1; $j <= $i; $j++){
//         echo "$i ";
//     }
//     echo "\n";
// }

// echo "\n";

// $number = 1;
// for($i = 1; $i <= 5; $i++){
//     for($j =1; $j <= $i; $j++){
//         echo "$number ";
//         $number += 1;
//     }
//     echo "\n";
// }


    




?>