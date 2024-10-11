<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP</title>
</head>
<body>
<h1> For loop </h1>
    <?php
    for($i=0;$i<10;$i++)
    {
        echo $i*10;
        echo"<br>";
    }
    echo"<br>";
    echo $i;
    ?>   
    
    <h1> While loop </h1>
    <?php
    $score=70;
    $counter=0;
    while($score<60)
    {
        $score=$score+10;
        $counter++;
        
    }
    echo"<br>";
    echo $score;
    echo"<br>";
    echo $counter;
    ?> 
   
    <div>$a=['a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999]</div>
    <?php
        $a=['a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999]; 

/*
        $i=0;           
        while(!empty($a[$i]))
        {
            echo '$a['.$i.']='.$a[$i++];
            echo"<br>";
                
        }  
*/       

        for($i=0;$i<count($a);$i++)
        {
            echo '$a['.$i.']='.$a[$i];
            echo"<br>";
        }   
        ?> 

    <h1>獲取陣列鍵值 </h1>                 
    <div>$b=['姓名'=>'simon','數學'=>90,'國文'=>80,'英文'=>20];</div>
        <?php
        //1.先把key取出
        //2.用key做成key陣列
        //3.用迴圈跑key陣列
        //4.把內容取出
        $b=['姓名'=>'simon','數學'=>90,'國文'=>80,'英文'=>20];
        foreach ($b as $subject => $score) {
            echo "$subject : $score\n";
            echo"<br>";
        }

        /*    
        $values = array_values($b);
        print_r($values);
        $subject = array_keys($b);
        print_r($subject); 
               
        for($i=0;$i<count($b);$i++)
        {
            echo '$subject['.$i.']='.$values[$i];
            //echo '$b['.$i.']='.$b[$i];
            echo"<br>";
        }          
        
        */
    ?>

 <p> &nbsp </p>
    
</body>

</html>