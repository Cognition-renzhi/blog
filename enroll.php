<?php

if($_SESSION['nickname'=='认知']){
    header('location:query.php');
}esle{

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

    <form action="" method="POST" name="enrollform"  > 
        <div class="outborder"  >
<div class="submitborder" >输入帐号:<input class="nickname"  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="16"   minlength="6" name="name" ></div>
<div class="submitborder" >输入密码:<input class="passcode" type="password"   name="password"></div>
<div class="submitborder" >确认密码:<input class="passcode" type="password"   name="password"></div>
<div class="submitborder1" >
    <input class="enroll" type="submit" value="登录"   onclick=getform()  >
    <button class="register"   >  <a   href="register.php"   >注册 </a>  </button>



</div>
</form>
    
</body>
</html>