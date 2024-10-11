<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>九九乘法表</h1> 
<?php
    echo "<table border=1>";
    for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=9;$j++)
        {
            $c=$i*$j;
            echo "<td>";
            if($c<10)
            echo $j."*".$i."=".$c.'&nbsp &nbsp &nbsp';
            else
            echo $j."*".$i."=".$c.'&nbsp &nbsp'; 
            echo "</td>";

        }
        echo "</tr>";
    }
    echo '</table>'       
?>  
<style>
.nine{
    border-collapse:collapse;
    margin:20px;
    border:1px
    
}    
.nine td{
    border: 1px solid #aaa;
    width: 30px;
    height: 30px;
    text-align:center;

}
.nine tr:nth-child(1),
.nine td:nth-child(1)
{
    background:blue;
    color:white;
}

</style>


<?php
    echo "<table class='nine'>";
    for($i=0;$i<=9;$i++)
    {
        echo "<tr>";
        for($j=0;$j<=9;$j++)
        {
            $c=$i*$j;
            echo "<td>";
            if(($j==0 && $i==0))
            {
                $c="";
            }
            else if($j==0)
            {
                $c=$i;                
            }
            else if($i==0)
            {
                $c=$j;

            }
            if($c<10)
                echo $c.'&nbsp &nbsp &nbsp';  //&nbsp 可以拿掉,在CSS table 已設對齊
            else
                echo $c.'&nbsp &nbsp';                      
            echo "</td>";
        }
        echo "</tr>";
    }
    echo '</table>'      
?> 


<?php
    echo "<table border=1>";
    for($i=0;$i<10;$i++)
    {
        echo "<td>";
        echo $i.'&nbsp &nbsp';
        echo "</td>";
    }
    for($i=1;$i<=9;$i++){
        echo "<tr>";
        echo "<td>$i&nbsp&nbsp</td>";
        for($j=1;$j<=9;$j++)
        {   
            $c=$i*$j;
            echo "<td>";
            if($c<10)
            echo $c.'&nbsp &nbsp';
            else
            echo $c.'&nbsp'; 
            echo "</td>";
        }
        echo "</tr>";
    }
    echo '</table>'       
?> 
</body>
</html>