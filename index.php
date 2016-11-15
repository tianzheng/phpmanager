<?php
$servername = "localhost";
$username = "root";
$password = "1234567890";
$dbname = "info_collect";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "SELECT * FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> name: ". $row["name"]. " - phone: ". $row["phone_no"]. " " . $row["sex"];
    }
} else {
    echo "0 个结果";
}
$conn->close();
?>