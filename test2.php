<?php
// 创建 TCP/IP 套接字
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    die("无法创建套接字: " . socket_strerror(socket_last_error()));
}

// 设置目标服务器的 IP 和端口
$host = '203.66.204.57'; // 目标服务器 IP
$port = 443; // 目标服务器端口

// 连接到目标服务器
if (socket_connect($socket, $host, $port) === false) {
    die("无法连接: " . socket_strerror(socket_last_error($socket)));
}

// 连接成功，TCP 握手已完成
echo "TCP 连接已建立。\n";

// 发送数据
$data = "GET / HTTP/1.1\r\nHost: $host\r\nConnection: close\r\n\r\n";
$bytes_sent = socket_send($socket, $data, strlen($data), 0);
if ($bytes_sent === false) {
    die("发送数据失败: " . socket_strerror(socket_last_error($socket)));
}

echo "成功发送 $bytes_sent 字节的数据。\n";

// 接收服务器响应
$response = '';
while ($buffer = socket_read($socket, 2048)) {
    $response .= $buffer;
}

// 输出响应
echo "服务器响应:\n$response\n";

// 关闭套接字
socket_close($socket);
?>



<?php
// 创建 TCP/IP 套接字
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    die("无法创建套接字: " . socket_strerror(socket_last_error()));
}

// 设置目标服务器的 IP 和端口
$host = '203.66.204.57'; // 目标服务器 IP
$port = 443; // 目标服务器端口

// 连接到目标服务器
if (socket_connect($socket, $host, $port) === false) {
    die("无法连接: " . socket_strerror(socket_last_error($socket)));
}

// 连接成功，TCP 握手已完成
echo "TCP 连接已建立。\n";

// 发送数据
$data = "GET / HTTP/1.1\r\nHost: $host\r\nConnection: close\r\n\r\n";
$bytes_sent = socket_send($socket, $data, strlen($data), 0);
if ($bytes_sent === false) {
    die("发送数据失败: " . socket_strerror(socket_last_error($socket)));
}

echo "成功发送 $bytes_sent 字节的数据。\n";

// 接收服务器响应
$response = '';
while ($buffer = socket_read($socket, 2048)) {
    $response .= $buffer;
}

// 输出响应
echo "服务器响应:\n$response\n";

// 关闭套接字
socket_close($socket);
?>