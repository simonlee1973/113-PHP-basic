<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        body{
            font-family: 'Courier New';

        }
    </style>
</head>
<body>
<?php
    echo "直角三角形<br>";
    $n=9; //邊長
    for($i=1;$i<=$n;$i++)
    {
        for($j=0;$j<$i;$j++)
            echo '*';
        echo "<br>";

    }

    echo "倒直角三角形<br>";

    for($i=1;$i<=$n;$i++)
    {
        for($j=$n-$i;$j>=0;$j--)
            echo '*';
        echo "<br>";

    }

    echo "正角三角形<br>";
    for($i=1;$i<=$n;$i++)
    {
        $start=$n-($i-1);
        $end=$n+($i-1);
        for($j=1;$j<$n*2;$j++)
        {

            if(($j<$start) || ($j>$end) )
                echo "&nbsp";
            else
                echo '*';
        }

        echo "<br>";

    }

    echo "倒正三角形<br>";

    for($i=1;$i<=$n;$i++)
    {
        $start=$i;
        $end=($n*2)-$i;
        for($j=1;$j<$n*2;$j++)
        {

            if(($j<$start) || ($j>$end) )
                echo "&nbsp";
            else
                echo '*';
        }

        echo "<br>";

    } 

    echo "菱形<br>";
    define('method', 0);
    if (defined('method') && method==1) {
    // 這段代碼僅在 method 被定義且為 0 時執行
    echo "方法 0:<br>";

    $k=2*$n;
    for($i=1;$i<$k;$i++)
    {
        if($i<$n) {
            $start=$n-($i-1);
            $end=$n+($i-1);
        }
        else {
            $start=$i-$n+1;
            $end=($k)-$start;            
        }
        for($j=1;$j<$n*2;$j++) {
            if(($j<$start) || ($j>$end) )
                echo "&nbsp";
            else
                echo '*';
        }
        echo "<br>";
        }    
    }
    else 
    {
        echo "方法 1:<br>";    

        for($i=1;$i<=$n;$i++)
        {
    
            $start=$n-($i-1);
            $end=$n+($i-1);
            for($j=1;$j<$n*2;$j++)
            {
                if(($j<$start) || ($j>$end) )
                    echo "&nbsp";
                else
                    echo '*';
            }
    
            echo "<br>";
        }
        for($i=1;$i<$n;$i++)
        {
            $start=$i;
            $end=($n*2-1)-$i-1;
            for($j=0;$j<$n*2;$j++)
            {
                if(($j<$start) || ($j>$end) )
                    echo "&nbsp";
                else
                    echo '*';
            }
    
            echo "<br>";
    
        } 

    }
    echo "菱形對角線<br>";
    $n=10;
    /*
    //單邊常不需考慮偶數
    if(($n&0x01)==0)
    {
        $n++;
        echo "偶數加1<br>";

    }
    */ 
    {
        $k=2*$n;
        for($i=1;$i<$k;$i++)
        {
            if($i<$n) {
                $start=$n-($i-1);
                $end=$n+($i-1);
            }
            else {
                $start=$i-$n+1;
                $end=($k)-$start;            
            }
            for($j=1;$j<$n*2;$j++) {
                if(($j==$start) || ($j==$end) ||($j==$n)|| ($i==$n))
                    echo '*';
                else                    
                    echo "&nbsp";
            }
            echo "<br>";
            }    
        }
    


    echo "菱形對角線(老師作法)<br>";
    $size=11;
        for($i=0;$i<$size;$i++){
            if($i>(floor($size/2))){
                $k1=$i-(floor($size/2));  //前半開始點
                $j1=2*($i-(2*($i-(floor($size/2)))))+1; //數量
            }else{
                $k1=(floor($size/2))-$i;   //後半開始點
                $j1=(2*$i+1);               //數量
            }
            
            for($k=0;$k<$k1;$k++){
                echo "&nbsp;";
            }
        
            for($j=0;$j<$j1;$j++){
                if($j==0 || $j==$j1-1 || $i==(floor($size/2)) || $j==floor(($j1-1)/2) ){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }
        
            }
            echo "<br>";
        
        }

    echo "矩形<br>";           
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            if($i==0||$j==0 ||$j==$n-1 ||$i==$n-1)
                echo '*';
            else 
                echo "&nbsp";
           
        }
        echo "<br>";
    }        

    echo "矩形II 含對角線<br>";           
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            if($i==0||$j==0 ||$j==$n-1 ||$i==$n-1 ||$i==$n-$j-1 || $i==$j)
                echo '*';
            
            else 
                echo "&nbsp";
           
        }
        echo "<br>";
    }     

    echo "矩形II 含對角線n+1<br>"; 
    $n++;          
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            if($i==0||$j==0 ||$j==$n-1 ||$i==$n-1 ||$i==$n-$j-1 || $i==$j)
                echo '*';
            
            else 
                echo "&nbsp";
           
        }
        echo "<br>";
    }  
    
    echo "用直角三角形做99乘法表<br>";
    $n=9; //邊長
    for($i=0;$i<=$n;$i++)
    {
        if($i==0 ) 
        {
            for($j=0;$j<=$n;$j++) 
            {
                $k=$j;   
            if($k<10)
                echo "&nbsp&nbsp".$k;
            else echo "&nbsp".$k;
            }

        }
        else 
        {        
            for($j=0;$j<=$i;$j++)
            {   
                if($j>1)
                    $k=$i*($j);
                else
                    $k=$i;
                if($k<10)
                    echo "&nbsp&nbsp".$k;
                else
                    echo "&nbsp".$k;
            }
        }
             

        echo "<br>";

    }    
    echo "新增GIT合併遠端再做merge<br>";  //GIT study    
?>
</body>
</html>