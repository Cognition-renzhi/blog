<?php
include('create.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册页面</title>
    <link rel="stylesheet" href="./css/styleregister.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body class="background"   >

    <form action="./register.php" method="POST"  > 
        <div class="register" >
            <div class="submitborder" >设置帐号:<input class="account" placeholder="设置您的帐号" id= "account" name="account" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="16"   minlength="6" name="name" >  <p name= "alarm1" ></p></div>
            <div class="submitborder" >设置昵称:<input class="nickname" placeholder="设置您的昵称"  id = "nickname" name= "nickname" type="text"    >   <p name="alarm2" ></p></div>
            <div class="submitborder" >设置密码:<input class="passcode"  id= "password"  name= "password"  type="password"    name="password"> <p  name="alarm3" ></p></div>
            <div class="submitborder" >确认密码:<input class="surepassword"  id="surepassword " name= "surepassword"   type="password"   name="surepassword">  <p name="alarm4" ></p></div>
        <div class="submitborder" ><button onclick="judgepassword()" class="submit" >注册</div>
    </div>
    <!-- <script src="./js/cookie.js"></script>  -->
</body>
</html>
