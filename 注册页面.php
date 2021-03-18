<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styleregister.css">
</head>
<body class="background" >
    <form action="./index1.php" method="POST" > 
        <div class="register" >
            <div class="submitborder" >输入帐号:<input class="nickname"  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="16"   minlength="6" name="name" ></div>
            <div class="submitborder" >输入密码:<input class="passcode" type="password"    name="password"></div>
            <div class="submitborder" >确认密码:<input class="passcode" type="password"   name="password"></div>
        
        <div class="submitborder" ><input class="submit" type="submit" value="注册" name="submit"></div>
    </div>
   
</body>
</html>