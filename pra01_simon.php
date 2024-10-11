<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>分配成績等級</h2>
<h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
<ul>
<li>0 ~ 59 => E </li>
<li>60 ~ 69 => D </li>
<li>70 ~ 79 => C</li>
<li>80 ~ 89 => B</li>
<li>90 ~ 100 => A</li>
</ul>
<?php
    $score=170;
    echo "$score=";
    if ($score < 0 || $score > 100) {
        echo "無效的分數";
        $level='F';
    } 
    else if($score<60 ){
        echo 'E';
        $level='E';}
        else if($score<70 ){
            $level='D';
            echo 'D';}
            else if($score<80 ){
                $level='C';
                echo 'C';}
                else if($score<90 ){
                    $level='B';
                    echo 'B';} 
                    else {
                        $level='A';
                        echo 'A';}  
    echo"<br>";
    //$level='A';
    switch($level){
        case "A":
            echo "表現優良 ";
        break;
        case "B":
            echo "值得肯定 ";
        break;
        case "C":
            echo "需要更多練習 ";
        break; 
        case "D":
            echo "需要加強基本功 ";
        break;
        case "E":
            echo "是否無心學習 ";
        break;        
        default:
            echo "資料錯誤 ";
                                              

    }                                                          
?>
    <hr>
    <h1> 閏年 </h1>


<ol>
    <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ol>

   
    地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。
<ul>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>


    <?php
    $year=1701;
    {
        echo"<br>";
        echo $year.'年'; 
        if(($year%400==0)||($year%4==0 && $year%100!=0))
        {    
            echo '潤年';
        }
        else
        {
            echo '平年';
        }
        echo"<br>";


        if($year%4 != 0)
        {
            echo '平年';
        }       
        else if ($year%100!=0) 
        {
            echo '潤年';
        }elseif($year%400!=0) 
        {
            echo '平年';
        }else{
            echo '潤年';
        }
            
    }
    ?>  
    <hr>
     <h1>取質數陣列 3,5,7,11,13,17……97</h1>
     <?php
        $counter=0;
        $times=0;
        $n=100;
        for($i=3;$i<$n;$i=$i+2){
            //for($k=2;$k<=$i/2;$k++)
            for($k=2;$k*$k<=$i;$k++)
            {
                $counter++;
                if($i%$k==0)
                    break;
            }
            //if($k>$i/2)
            if($k*$k>$i)
            {
                echo $i.', ';
                $times++;
                //echo"<br>";
            }
        }
        echo "計算次數:".$counter." 質數數量:".$times."<br>"

            

            
        

     ?> 

 
     
 <p> &nbsp </p>
 <p> &nbsp </p>         
</body>
</html>