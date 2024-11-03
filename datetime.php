<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{

            border-collapse:collapse;
            
        }
        td{
            padding:5px 10px;
            text-align:center;
            border:1px solid #999; 
        }
        .holiday{
            background: pink;
        }
        .grayday{
            color:gray;
        }
        .today{
            background:blue;
            color:white

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td>
        </tr>
    
<?php
 //to do
 
  $mons=[31,28,31,30,31,30,31,31,30,31,30,31];
  
  $first_day_of_mon=new datetime('first day of this month');
  $now_day=new datetime();
  $mons_index=(int)$first_day_of_mon->format('n')-1;
  if($first_day_of_mon->format('L')==1)
    $mons[1]=29;
  $first_day_of_week=(int)$first_day_of_mon->format('w');
 


  if($first_day_of_week!=0)      
      $days=-$first_day_of_week;
  else
      $days=0;         
    

    $urlstart=$run_day->format("Ymd");
    $the_monthend_day =clone $run_day;
    $the_monthend_day->modify("42 days");
    $urlend=$the_monthend_day->format("Ymd");
    $httpstr='https://www.twse.com.tw/exchangeReport/TWT49U?response=html&strDate='.$urlstart.'&endDate='.$urlend;
    //echo "str:".$httpstr;

    // 初始化 cURL
    $twse_data = curl_init($httpstr);

    // 設置 cURL 選項
    curl_setopt($twse_data, CURLOPT_RETURNTRANSFER, true); // 返回內容而非輸出
    curl_setopt($twse_data, CURLOPT_FOLLOWLOCATION, true); // 跟隨重定向

    // 執行請求
    $response = curl_exec($twse_data);
    $dom = new DOMDocument;
    libxml_use_internal_errors(true);
    $dom->loadHTML($response);
    libxml_clear_errors();

    $datadom= new DOMXPath($dom);

    $rows = $datadom->query('//tr');      
      
   for ($weeks=0; $weeks < 6; $weeks++) { 
    echo "<tr>";
    for ($i=0; $i < 7; $i++) {
        $run_date=clone $first_day_of_mon;
        //$run_date->modify('$days day'); 
        $run_date->modify("$days days");        
        $day= $run_date->format('j');

        if($i==0 || $i == 6)
        {
            echo "<td class= holiday>";            
        }else if($days<0 || $days>$mons[$mons_index])
        {
            echo "<td class= grayday>";
        }else if($run_date->format("Y-m-d")==$now_day->format("Y-m-d"))
        {
            echo "<td class= today>";                        
        }
        else echo "<td>";

        echo $day;
        $days++;
        echo "</td>";           
    }
    echo "</tr>";
   } 
   echo '</table>';

$date1 = new DateTime('2020-08-01');
$datt2 = new DateTime('2020-08-15');
$interval = $date1->diff($datt2);
 
// +14 days
echo $interval->format("%R%a -days");
//echo "$interval->days days";
?>

</body>
</html>