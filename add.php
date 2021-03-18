<?php
include('db.php');
 @$content = $_POST['content'];
 @$username = $_POST['username'];
@$commentcontent =$_POST['commentcontent'];
if($username!=null&&$content!=null){
    $sql= " INSERT INTO msg ( username,content,comment)
    VALUES('{$username}', '{$content}','{$commentcontent}')";
  
  $sth = $pdo->prepare($sql);
  $sth->execute();
}

$sql2="SELECT * FROM msg  ORDER BY id DESC";
$sth2=$pdo->prepare($sql2);
$sth2->execute();
$rows=$sth2->fetchAll();


?> 