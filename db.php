<?php
$severname ="localhost";
$sqlusername ="root";
$sqlpassword ="";
$database="a1";

// 设置变量储存本机名称登录名密码
// $conn = mysqli_connect($severname,$sqlusername,$sqlpassword);
// 建立mysql连接
// if(!$conn){
//  die ("Connection failed:" . mysql_connect_error())."<br>";
// }
//  else {
//        echo "连接成功"."<br>";
//     }
// 检测连接
// $sql= "CREATE DATABASE $database";
// if(mysqli_query ($conn,$sql)){
//     // $conn 是带入连接，$sql 是让变量实现 创建名为register 的数据库  
//     echo "数据库创建成功"."<br>";
// }
// else{
//     echo "Error creating database" . mysqli_error($conn)."<br>";
//     // 输出错误信息 不可重复创建
// }
$connection = mysqli_connect($severname,$sqlusername,$sqlpassword,$database);

$dsn = 'mysql:dbname=a1;host=127.0.0.1'; 
$pdo = new PDO($dsn,'root','');

?>