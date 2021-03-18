<?php

include('db.php');
$id = $_GET['id'];
// echo($_GET['id']);
@$newcontent= $_POST['newcontent'];
@$commentcontent= $_POST['commentcontent'];
// var_dump($comment);

// var_dump($newcontent);
if($newcontent!=null){
$sql="UPDATE  msg  SET  content= '$newcontent' WHERE id= '$id'";
$sth = $pdo->prepare($sql);
$sth->execute();
}
if($commentcontent!=null){
$sql1="UPDATE  msg  SET  comment= '$commentcontent' WHERE id= '$id'";
$sth1 = $pdo->prepare($sql1);
$sth1->execute();
}

header('location:blog.php');

?>