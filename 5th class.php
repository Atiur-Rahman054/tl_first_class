<?php 
    //function
    //super global variable
    //Function scope and variable scope
    //Function return type
    //Function Parameter type check
    //Unlimited armuments pass in a function
    //Recursive and recursion function

    //function syntex:

        // function functionName(){
        //     code;
        // }

    //call a function:

        //functionName();


    //Example

    function display(){
        echo "I am from display funciton \n";
    }

    display();
    //Repeating the loop through funciton calls
    function loop(){
        for($i = 1; $i <= 5; $i++){
            echo "$i \n";
        }
    }

    loop();
    
    echo "\n";

    //display sum of two variable through function call
    function sum(){
        $a = 10;//function local variable
        $b = 20;//function local variable
        echo "a + b = " . $a + $b . "\n";
    }

    sum();

    echo "\n";

    //display sum of two super global variable through funciton call
    $a = 50;//global variable
    $b = 80;//global variable

    function add(){
    $result = $GLOBALS['a'] + $GLOBALS['b'];
    echo "$result \n";
    }

    add();

    echo "\n";

    //sum two variable through function call by passing arguments
    function addition($num1, $num2){//$num1, num2 function parameter
        $a = $num1;
        $b = $num2;
        $sum = $a + $b;
        echo "sum = " . $sum . "\n";
    }
    addition(20, 30);//20, 30 arguments

    $x = 10;
    $y = 15;
    addition($x, $y);//$x, $y arguments

    echo "\n";

    //sum two variable through function call with null parameter
    function nullablesum($a = 0, $b = 0){
        $sum = $a + $b;
        echo "sum = " . "$sum \n";
    }
    nullablesum();//without passing arguments
    nullablesum(10);//passing one arguments
    nullablesum(10,30);//passing two argumets

    echo "\n";

    //sum two variable through function call with parameter data type
    function paramtypesum(float | int $a, float | int $b){
        $result = $a + $b;
        echo "sum = " . "$result \n";
    }

    paramtypesum(20.5, 20);

    echo "\n";

    //sum two variable through function call with return type
    function returntypesum(int|float $a, int|float $b):int|float{
        $sum = $a + $b;
        return $sum;
    }
    $result = returntypesum(10, 20);
    echo "Result = " . "$result \n";
    echo "\n";

    //sum unlimited variable through functioncall
    function unlimitedvaluesum(int|float ...$values):int|float{
        $sum = 0;
        foreach($values as $value){
            $sum += $value;
        }
        return $sum;
    }

    $result = unlimitedvaluesum(10,20,50,20);
    echo "Result = " . "$result \n";

    echo "\n";

    //display 1-5 using recursive function
    function recursivefun($start, $end){
        echo "$start \n";
        if($start == $end){
            return;
        }
        $start++;
        recursivefun($start, $end);
    }

    recursivefun(1, 5);
    echo "\n";

                        //HOME TASK//

    //Factorial value using recursive function

    function fact($n){
        if($n == 1){
            return 1;
        }else{
            return $n * fact($n - 1);
        }
    }

    echo "Factorial is = " . fact(5) . "\n";
 
    echo "\n";
    
    //Check Prime Number using function
    function checkprime($number){
        $check = 0;
        if($number < 2){
            $check++;
        }else{
            for($i = 2; $i < $number; $i++){
                if($number % $i == 0){
                    $check++;
                    break;
                }
            }
        }

        if($check == 1){
            return "$number is not a prime number \n";
        }else{
            return "$number is a prime number \n";
        }
    }

    $check = checkprime(51);
    echo "$check";

    //check all prime number using function
    echo "\n";

    function allprimecheck($allnumber){
        for($allnumber; $allnumber >= 0; $allnumber--){
            $check = 0;
            if($allnumber < 2){
                $check++;
            }else{
                for($i = 2; $i < $allnumber; $i++){
                    if($allnumber % $i == 0){
                        $check++;
                        break;
                    }
                }
            }
            if($check == 1){
                echo "$allnumber is not a prime number \n";
            }else{
                echo "$allnumber is a prime number \n";
            }
        }
    }
    allprimecheck(4);

    echo "\n";
    // check allprime number using recursive function
    function checkrprime($pnumber){
        if($pnumber < 0){
            return "Please insert a positive integer value \n";
        }{
            $check = 0;
            if($pnumber < 2){
                $check++;
            }else{
                for($i = 2; $i < $pnumber; $i++){
                    if($pnumber % $i == 0){
                        $check++;
                        break;
                    }
                }
            }
        }

        if($check == 1){
            echo "$pnumber is not prime \n";
        }else{
            echo "$pnumber is prime \n";
        }

        checkrprime(--$pnumber);
    }


    echo checkrprime(3);

    echo "\n";

    //Fibonacci series in function
    function fibo($value){
        $n1 = 0;
        $n2 = 1;
        echo "Fibo series = " . $n1 . " " . $n2 . " ";
        for($i = 0; $i <= $value; $i++){
            $sum = $n1 + $n2;
            $n1 = $n2;
            $n2 = $sum;
            echo "$sum ";
        }
    }
    fibo(5);

    echo "\n";

    // //factorial value using function with for loop

    // function factorialvalue($value){
    //     $factorial = 1;
    //     for($i = $value; $i >= 1; $i--){
    //         $factorial = $factorial * $i;
    //     }
        
    //     return $factorial;
    // }
    // $factorial = factorialvalue(5);
    // echo "Factorial = " . "$factorial \n";







?>