<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <!-- 这是一个在文本中的注释 
      <title>Document</title>
  -->
    
    <title>程式語言基礎</title>
</head>
<body>

    <h1> 流程if-else</h1>    
    <?php
    $score=60;
    echo 'asda  $score sddas';
    echo "<br>";
    echo "asda  $score sddas";
    echo "<br>";
    echo "asda  {$score} sddas";
    echo "<br>";
    echo "asda ".$score." sddas";
    echo "<br>";
    if($score>=75){
        echo "及格";        
    }else{

        echo "不及格";
    }   
    ?>
    
    <h1> switch case </h1>
    <?php
        $level='A';
        switch($level){
            case "A":
                echo "表現優良 ";
            //break;
            case "B":
                echo "值得肯定 ";
            break;
            case "C":
                echo "需要更多練習 ";
            break; 
            case "D":
                echo "需要加強基本功 ";
            break;
            default:
                echo "是否無心學習 ";
                                                  

        }
    ?>

    <h1> 三元運算子 </h1>
    <?php
        $score=55;
        echo ($score>=60)?'及格':'不及格';
        //echo "$level";
    ?>    

   
    <h1> 閏年 </h1>
    <?php
    $n=1700;
    {
        echo"<br>";
        echo $n.'年'; 
        if($n%4 != 0)
        {
            echo '平年';
        }       
        else if ($n%100!=0) 
        {
            echo '潤年';
        }elseif($n%400!=0) 
        {
            echo '平年';
        }else{
            echo '潤年';
        }
    }
    ?>      
</body>
</html>