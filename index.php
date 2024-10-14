git <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎/github 操作練習</title>
</head>
<body style='text-align:left'>
<?php
    define ("PI",3.1415);
    $price=100;
    echo $price;
    echo "<br>";

    $name_first="Lee";
    $name_last="Simon";
    echo $name_first.$name_last;
    echo "<br>";

    $total=100*5+32/10*3;
    echo $total;

    echo "<br> six random numer=";
    $num=rand(1,49).", " .rand(1,49).", " .rand(1,49).", " .rand(1,49).", " .rand(1,49).", " .rand(1,49);
    echo $num;

    echo "<br>六個隨機數=";
    $random_numbers = [];
    for ($i = 0; $i < 6; $i++) {
        $random_numbers[] = rand(1, 49);
    }
    echo implode(", ", $random_numbers);
    
    echo "<br>";    

    echo "<br>";
    $apha='1';
    echo ($apha === 1) ? "true" : "false"; // Use ternary operator for cleaner output

    echo "<br>";
    $num=1000;
    // echo $num;
    echo "Num: $num<br>";
    /* 
        echo "<br>";
        echo "PI是".PI;
    */
    define("PI",0.6218);
    echo "<br>";
    echo "圓周率是".PI;   
    
    echo "<br>";
    
    $a=10;
    $b=50;

    echo '$a='.$a;
    echo '  $b='.$b;
    echo "<br>";
    echo "<br>";
    $c=$a;    
    $a=$b;
    $b=$c;
    //清除變數
    // unset($c);
    // echo $c;    
    echo '$a='.$a;
    echo '  $b='.$b;
?>


</body>
</html>