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
    $n=9;
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

    echo "矩形II<br>";           
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

?>
</body>
</html>