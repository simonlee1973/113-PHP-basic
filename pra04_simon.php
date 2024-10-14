<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        } 
    </style>   
</head>
<body>

<?php
   $header= ["name","國文","英文","數學","地理","歷史"];
   $judy=   ["Judy",95,64,70,90,84]; 
   $amo = ["amo",88,78,54,81,71];
   $john=["john",45,60,68,70,62];
   $peter=["peter",59,32,77,54,42];
   $hebe=["hebe",71,62,80,62,64];
// 將所有學生數據放入一個二維數組
$class = [$judy, $amo, $john, $peter, $hebe];

// 開始生成 HTML 表格
echo "<table>";
echo "<pre>"; 
echo print_r($class, true) ;
echo "</pre>";
// 打印表頭
echo "<tr>";
foreach ($header as $value) {
    echo "<th>{$value}</th>";
}
echo "</tr>";

// 打印每位學生的成績
foreach ($class as $student) {
    echo "<tr>";
    foreach ($student as $value) {
        echo "<td>{$value}</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>

</html>