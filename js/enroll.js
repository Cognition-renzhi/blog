function getform(){
    var account=myform.account.value;
    var password=myform.password.value;
    var surepassword=myform.surepassword.value;
    if(account==null&&surepassword==null&&password==null){
        alert('账号不能为空，密码不能为空，确认密码不能为空');
    }
    if(account!=null&&surepassword==null&&password==null){
        alert('密码不能为空，确认密码不能为空');
    }
    if(account==null&&surepassword!=null&&password==null){
        alert('账号不能为空，密码不能为空');
    }
    if(account==null&&surepassword==null&&password!=null){
        alert('账号不能为空，确认密码不能为空');
    }
    if(account!=null&&surepassword!=null&&password==null){
        alert('密码不能为空');
    }
    if(account!=null&&surepassword==null&&password!=null){
        alert('确认密码不能为空');
    }
    if(account==null&&surepassword!=null&&password!=null){
        alert('账号不能为空');
    }
    if(account!=null&&surepassword!=null&&password!=null){
       if(password==surepassword){}
      if(password!=surepassword){
        alert('两次输入密码不一致');
      }
    

    }
    console.log(account);
    console.log(password);
    console.log(surepassword);
}
