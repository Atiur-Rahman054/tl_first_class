<?php
    echo "PHP Data Type \n";
    //1. String
    $string_text = "Hello PHP";
    echo $string_text. "\n";
    //2. Integer
    $num = 1000;
    echo $num . "\n";
    //3. Floating point
    $num2 = 10.50;
    echo $num2 . "\n";
    //4. boolen
    $bol = true;
    echo $bol . "\n";
    //5. null
    $status = null;
    echo $status . "\n";
    //6. array
    $arr = ['Atik', 'Arman', 'Sabab'];
    print_r($arr). "\n";
    //php Operatior
    echo "Arithmetic Operator \n";

    $a = 10;
    $b = 20;
    $sum = $a + $b;//addition operator
    $sub = $b - $a;//subtration operator
    $multiply = $a * $b;//multiply operator
    $div = $b / $a;// division operator
    $modulus = $b % $a;//Modulus operator
    $exponentiation = 5 ** 3;
    echo $sum . "\n" . $sub. "\n" . $multiply . "\n" . $div . 
    "\n" . $modulus . "\n" . $exponentiation . "\n";

    echo "Assignment Operator \n";
    $x = 10;//
    echo $x . "\n";
    $x1 = 10;
    $x2 = $x1;
    echo $x2 . "\n";
    $x3 = 15;
    $x3 += 10;
    echo $x3 . "\n";
    echo "Comparison Operator \n";
    $fnum = 10;
    $snum = 10;
    $tnum = "10";
    var_dump($fnum == $snum);//check without data type
    var_dump($fnum == $tnum);//check without data type
    var_dump($fnum === $snum);//check with data type
    var_dump($fnum === $tnum);//check with data type
    var_dump($fnum!=$snum);//check not equal without data type
    var_dump($fnum !== $tnum);//check not equal with data type
    var_dump($fnum > $snum);//check greater number
    var_dump($fnum <= $snum);//check less number or equal
    var_dump($fnum >= $tnum);//check greater number or equal
    echo "php Increment or Decrement Operator \n";
    $i = 10;
    echo $i++ . "\n";//post increment
    echo ++$i . "\n";//pre increment
    $j = 10;
    echo --$j . "\n";//pre decrement
    echo $j-- . "\n";//post decrement
    echo "Logical Operatior \n";
    $p = 10;
    $q = 10;
    $r = 20;
    var_dump($p == $q && $p == $r);//Logical and operator
    var_dump($p == $q || $p == $r);//Logical or operator
    var_dump($p == $q xor $p == $r);//xor operator
    var_dump($p != $q);//logical not operator
    echo "php string \n";
    $firstName = "Atik";
    $lastName = "Hasan";
    echo "My name is $firstName $lastName \n";
    echo "My name is " . $firstName . " " . $lastName . "\n";
    $val = 10;
    $val .=20;
    echo $val . "\n";
    echo "Ternary opetator \n";
    $t =10;
    echo $t == 10 ? "true" : "false";
    echo "\n";
    echo "Null coalescing \n";
    // $n = 10;
    echo $n ?? "Nai \n";
    echo "Ascii code \n";
    printf("Ascii %c \n", 97);
    printf("Binary %b \n", 10);
    printf("Float number %f \n", 30);
    printf("Float number short %.2f \n", 30);
    $str = "stringType";
    printf("string = %s \n", $str );
    printf("Decimal number %d \n", 10);

    echo "Homework \n";
    $number1 = 20;
    $number2 = 30;
    $container = $number1;
    $number1 = $number2;
    $number2 = $container;
    echo $number1 . "\n";
    echo $number2 . "\n";
    //using arithmetic opetator
    $number3 = 20;
    $number4 = 30;
    $number3 = $number3 + $number4;
    $number4 = $number3 - $number4;
    $number3 = $number3 - $number4;
    echo $number3 . "\n";
    echo $number4 . "\n";


?>




<?php 

     $x = 5;
     $y = 3;
     $p = (++$x)+($y++)+($x++)+(++$y);
     echo $x ."\n";
     echo $y. "\n";
     echo $p ."\n";
?>