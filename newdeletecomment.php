<?php
include('db.php');
$id = $_GET['id'];
// echo($_GET['id']);
var_dump($id);
@$deletecomment='';
var_dump($deletecomment);

$sql="UPDATE  msg  SET comment='$deletecomment'WHERE id= '$id'";
$sth = $pdo->prepare($sql);
$sth->execute();

header('location:query.php');
?>
