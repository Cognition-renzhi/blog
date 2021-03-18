
<?php
include('db.php');
$id = $_GET['id'];
// echo($_GET['id']);
var_dump($id);

$sql="DELETE FROM msg WHERE id= '$id'";
$sth = $pdo->prepare($sql);
$sth->execute();
header('location:blog.php');

?>
