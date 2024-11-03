<?php

$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, 'https://www.google.com.tw/');
//curl_setopt($ch, CURLOPT_URL, 'https://www.moneydj.com/z/ze/zej/zej.djhtm?A=EV000011&B=2024-11-17&C=-2'); //OK
curl_setopt($ch, CURLOPT_URL, 'https://www.nstock.tw/calendar');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// 设置连接超时（秒）
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // 10秒连接超时

// 设置请求超时（秒）
curl_setopt($ch, CURLOPT_TIMEOUT, 30); // 30秒请求超时

// 設置 User-Agent
curl_setopt($ch, CURLOPT_USERAGENT, 
'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36'
);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION , 1);
//curl_setopt($ch, CURLOPT_POST , 1);

// 設置 Cookie 文件
//curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt'); // 保存 cookies
//curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt'); // 讀取 cookies

// 設置 HTTP 標頭
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'Referer: https://www.moneydj.com/',
    // 'Referer: https://www.google.com.tw/',
    // 'Accept-Language: en-US,en;q=0.5'
    'Accept-Language:zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7'
]);



$response1 = curl_exec($ch);
// 获取信息
$info = curl_getinfo($ch);

// 输出本地 IP 和端口
$local_ip = $info['local_ip']; // 本地 IP
$local_port = $info['local_port']; // 本地端口


if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);

} else {
    echo $response1;
  
}

file_put_contents('output.html', $response1);
//file_put_contents('info.html', $info);
echo "<br>網頁內容已存儲到 output.html";  
echo "<br>".$local_ip."port:".$local_port;
curl_close($ch);

?>



