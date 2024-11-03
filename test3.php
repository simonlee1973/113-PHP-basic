<?php
// 初始化多个 cURL 会话
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, "https://www.dcn.com.tw/");
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_USERAGENT, 
//'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.6723.91 Safari/537.36'
'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36'
);
curl_setopt($ch1, CURLOPT_HTTPHEADER, [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'Referer: https://www.dcn.com.tw/',
    // 'Referer: https://www.google.com.tw/',
    // 'Accept-Language: en-US,en;q=0.5'
    //'Accept-Language: en-US,en;q=0.9,zh-TW;q=0.8'
    'Accept-Language:zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7'
]);

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, "https://www.dcn.com.tw/");
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_USERAGENT, 
'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36'
);

curl_setopt($ch2, CURLOPT_HTTPHEADER, [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'Referer: https://www.dcn.com.tw/',
    // 'Referer: https://www.google.com.tw/',
    // 'Accept-Language: en-US,en;q=0.5'
    //'Accept-Language: en-US,en;q=0.9,zh-TW;q=0.8'
    'Accept-Language:zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7'
]);

// 创建 cURL 多重句柄
$multiHandle = curl_multi_init();

// 将两个会话添加到多重句柄
curl_multi_add_handle($multiHandle, $ch1);
curl_multi_add_handle($multiHandle, $ch2);

// 执行所有请求
$running = null;
do {
    curl_multi_exec($multiHandle, $running);
    curl_multi_select($multiHandle);
} while ($running > 0);

// 获取结果
$response1 = curl_multi_getcontent($ch1);
$response2 = curl_multi_getcontent($ch2);

// 输出结果
echo "Response from page1:\n$response1\n";
echo "Response from page2:\n$response2\n";

// 关闭会话
curl_multi_remove_handle($multiHandle, $ch1);
curl_multi_remove_handle($multiHandle, $ch2);
curl_multi_close($multiHandle);
curl_close($ch1);
curl_close($ch2);
?>