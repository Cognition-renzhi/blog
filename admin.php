<?php
@$account=$_POST['account'];
@$nickname=$_POST['nickname'];
@$password=$_POST['password'];
@$surepassword=$_POST['surepassword'];
echo($account);

if($account=='2804120991'&&$password=='15806481601'&&$surepassword=='15806481601'){
    echo"管理员登录成功";
    session_start();
    $_SESSION['nickname']='认知';
    $_SESSION['account']=$_POST['account'];
    $_SESSION['password']=$_POST['password'];
    header('location:blog.php');
}else{
 
    echo"管理员登录失败";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录页面</title>
    <link rel="stylesheet" href="./css/styleenroll.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

    <form action="admin.php" method="POST" name="enrollform"  > 
        <div class="outborder"  >
<div class="submitborder" >输入帐号:<input class="nickname"  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="16"   minlength="6" name="account" ></div>
<div class="submitborder" >输入密码:<input class="passcode" type="password"   name="password"></div>
<div class="submitborder" >确认密码:<input class="passcode" type="password"   name="surepassword"></div>
<div class="submitborder1" >
    <input class="enroll" type="submit" value="登录"   onclick=getform()  >
    <button class="register"   >  <a   href="register.php"   >注册 </a>  </button>



</div>
</form>
    
</body>
</html>