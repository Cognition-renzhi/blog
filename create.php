 <?php
 include('db.php');
@$account=$_POST['account'];
@$nickname=$_POST['nickname'];
@$password=$_POST['password'];
@$surepassword=$_POST['surepassword'];
 

  
   if($account==null&&$nickname==null&&$password==null&&$surepassword==null){
      echo "<script  >alert('帐号不能为空，昵称不能为空，密码不能为空，确认密码不能为空。');</script>"; 
  }
  else  if($account!=null&&$nickname==null&&$password==null&&$surepassword==null){
     
       
      echo "<script>alert('昵称不能为空，密码不能为空，确认密码不能为空。');</script>"; 
  
  }
  else  if($account==null&&$nickname!=null&&$password==null&&$surepassword==null){
   
      echo "<script>alert('账号不能为空，密码不能为空，确认密码不能为空。');</script>"; 
  }
  else  if($account==null&&$nickname==null&&$password!=null&&$surepassword==null){
  
      echo "<script>alert('账号不能为空，昵称不能为空，确认密码不能为空。');</script>"; 
  
  }
  else  if($account==null&&$nickname==null&&$password==null&&$surepassword!=null){
      
      echo "<script>alert('账号不能为空，昵称不能为空，密码不能为空。');</script>"; 
  }
  else  if($account!=null&&$nickname!=null&&$password==null&&$surepassword==null){
   
      
      echo "<script>alert('密码不能为空，确认密码不能为空。');</script>"; 
  }
  else  if($account!=null&&$nickname==null&&$password!=null&&$surepassword==null){
  
      echo "<script>alert('昵称不能为空，确认密码不能为空。');</script>"; 
      
  }
  else  if($account!=null&&$nickname==null&&$password==null&&$surepassword!=null){
  
      
      echo "<script>alert('昵称不能为空，密码不能为空。');</script>"; 
  }
  else  if($account==null&&$nickname!=null&&$password!=null&&$surepassword==null){
      
      echo "<script>alert('账号不能为空，确认密码不能为空。');</script>"; 
  }
  else  if($account==null&&$nickname!=null&&$password==null&&$surepassword!=null){
     
      echo "<script>alert('账号不能为空，密码不能为空。');</script>"; 
  
  }
  else  if($account==null&&$nickname==null&&$password!=null&&$surepassword!=null){
      
      echo "<script>alert('账号不能为空，昵称不能为空。');</script>"; 
      
  }
  else  if($account!=null&&$nickname!=null&&$password!=null&&$surepassword==null){
   
     
      echo "<script   >alert('确认密码不能为空');</script>";
  }
  else  if($account!=null&&$nickname!=null&&$password==null&&$surepassword!=null){
  
      echo "<script>alert('密码不能为空');</script>";
      
  }
  else  if($account!=null&&$nickname==null&&$password!=null&&$surepassword!=null){
      echo "<script>alert('昵称不能为空');</script>";
  
  }
  else  if($account==null&&$nickname!=null&&$password!=null&&$surepassword!=null){
      
      echo "<script>alert('账号不能为空');</script>";
    
  }
  else  if($account!=null&&$nickname!=null&&$password!=null&&$surepassword!=null){
    if($password!=$surepassword){
      echo "<script>alert('两次密码输入不一致');</script>";
    }
    if($password==$surepassword) {
       $sql1="SELECT FROM user WHERE  nickname  LIKE '%{$nickname}%'  ";
       $sth1 = $pdo->prepare($sql1);
       $sth1->execute();
       @$row1=$sth1->fetchAll();
       if( empty($row1)) {
           echo(未注册); print_r($row1);
       }else{
           echo(已经注册);print_r($row1);
       }
              // $sql2 = "CREATE TABLE user(
        //     id INT(16) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     account  VARCHAR(64)  NOT NULL,
        //    nickname VARCHAR(16) NOT NULL,
        //    passcode  VARCHAR(30) NOT NULL,
        //    reg_date TIMESTAMP)";
        //  if(mysqli_query($connection,$sql2)){
        //      echo "数据表单 User 创建成功" ."<br>";
        //  }else{
        //      echo "创建数据表单错误:" . mysqli_error($connection)."<br>";
        //  }
         $sth2=  " INSERT INTO user ( account,nickname, passcode)
         VALUES('{$account}', '{$nickname}', '{$password}')";
         mysqli_query($connection,$sth2);
         // if ($connection->query($sth2) === TRUE) {
         //     echo "新记录插入成功"."<br>";
         // } else {
         //     echo "Error: " . $sth . "<br>" . $connection->error;
         // }
         
         // $sql3 = "CREATE TABLE msg(
         //     id INT(16) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         //     username VARCHAR(5000) NOT NULL,  
         //      content  VARCHAR(40000) NOT NULL,
         //     comment  VARCHAR(10000) NOT NULL,    
         //     reg_date TIMESTAMP)
         //     ";
             
         //      mysqli_query($connection,$sql3);
         //      if(mysqli_query($connection,$sql3)){
         //     //  echo "数据表单 msg 创建成功" ."<br>";
         //  }else{
         //     //  echo "创建数据表单错误:" . mysqli_error($connection)."<br>";
         //  }   
         
         $sql4 = "insert into user (account,nickname,passcode) values ('$account','$nickname',$password')";
         $sth4 = $pdo->prepare($sql4);
         $sth4->execute();
        
session_start();
$_SESSION['nickname']=$nickname;
echo($_SESSION['nickname']);
         

     

         

     
       
    
   
      
  }
}
?>
