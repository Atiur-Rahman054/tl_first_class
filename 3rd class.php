<?php
    //3rd class HomeWork

    echo "PHP Conditon \n";

    //if else
    // if elseif
    //if else if else
    //switch

    //Using if else conditon
    if(true){
        echo "Login \n";
    }
    $a = 10;
    $b = 5;
    if($a == $b){
        echo "Login \n";
    }else{
       echo "Login Error \n";
    }

    $a = 10;
    $b = 5;
    if($a > $b){
        echo "Big number a = " . $a . "\n";
    }else{
        echo "Big nuber b = ". $b . "\n";
    }


    //Using if elseif condition
    $a = 10;
    $b = 20;
    $c = 5;
    if($a > $b && $a > $c){
        echo "Big number a = " . $a . "\n";
    }elseif($b > $a && $b > $c){
        echo "Big number b = " . $b ."\n";
    }else{
        echo "Big number c = " . $c . "\n";
    }

    $userName = "user";
    $password = "123";
    if($userName == "user" && $password == "123"){
        echo "Login success \n";
    }else{
        echo "Invalid username or password \n";
    }

    if($userName == "user"){
        if($password == "123"){
            echo "Username and password matched \n";
        }else{
            echo "Invalid password \n";
        }
    }else{
        echo "Invalid username \n";
    }

    //switch conditon
    $a = date('D');
    switch($a){
        case "Sat":
            echo "Saturday \n";
            break;
        case "Sunday":
            echo "Sunday \n";
            break;
        case "Mon":
            echo "Monday \n";
            break;
        case "Tue":
            echo "Tuesday \n";
            break;
        case "Wed":
            echo "Wednesday \n";
            break;
        case "Thu":
            echo "Thursday \n";
            break;
        case "Fri":
            echo "Friday \n";
            break;
        default:
            echo "Not a day found \n"; 
    }
    //Ternary operator
    $a = 10;
    $b = 20;
    echo $a == $b ? "ok \n" : "wrong \n";
    echo $a . "\n" ?? "nai \n";


    //Home task
    $year = 2000;

    //check leap year
    if($year%4 == 0 && $year%400 == 0 || $year%100 != 0){
        echo "$year is leap year \n";
    }else{
        echo "$year is not leap year \n";
    }

    //check odd or even number
    if($year%2 == 0){
        echo "$year is a even number \n";
    }else{
        echo "$year is a odd number \n";
    }

    //check vowel or consonant letter using switch
    $val = "a";
    switch($val){
        case "a":
            echo "Input is vowel \n";
            break;
        case "e":
            echo "Input is vowel \n";
            break;
        case "i":
            echo "Input is vowel \n";
            break;
        case "o";
            echo "Input is vowel \n";
            break;
        case "u":
            echo "Input is vowel \n";
            break;
        default:
            echo "Input is consonant \n";
    }

    //switch shortcut

    switch($val){
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            echo "Input is vowel \n";
            break;
        default:
            echo "Input is consonant \n";
    }


    


    
?>