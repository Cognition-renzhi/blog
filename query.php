<?php
include('db.php');
@$query=$_POST['query'];
@$commentcontent= $_POST['commentcontent'];
// if($query!=null){
// if($commentcontent==null){
$sql="SELECT * FROM msg WHERE username   LIKE '%{$query}%'  or   content   LIKE '%{$query}%'  or   comment   LIKE '%{$query}%'  ";
$sth=$pdo->prepare($sql);
$sth->execute();
@$row=$sth->fetchAll();
// }
// if($commentcontent!=null){
//     $sql="SELECT * FROM msg WHERE username   LIKE '%{$query}%'  or   content   LIKE '%{$query}%' or   comment   LIKE '%{$query}%'  ";
//     $sth=$pdo->prepare($sql);
//     $sth->execute();
//     @$row=$sth->fetchAll();
// }
// } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php
        foreach($row as $key=>$msg ){
   ?>
<form action="newupdate.php?id=<?php echo $msg['id'] ?>"   method="POST"    onsubmit="return checkLength()"  >
    
    <div class='row'>
        <div class='col-12'>
            <div class='border rounded p-2 mb-2'>
                <div class='text-primary'> <?php echo $msg['username']; ?></div>
                <div> <?php  echo $msg['content' ];?></div>
                <button type="button" class="btn btn-info"><?php  echo $msg['reg_date' ];?></button>
                <button type="button" class="btn btn-danger"  style="underline:none; color:black;"  ><a style="underline:none; color:white;" href="newdeletecontent.php? id=<?php echo $msg['id'] ?>">删除</a></button>
                <div> <?php  echo $msg['comment'];?></div>
                <button type="button" class="btn btn-danger" name="deletecomment"  id="deletecomment" style="underline:none; color:black; display:none;"  ><a style="underline:none; color:white;" href="newdeletecomment.php? id=<?php echo $msg['id'] ?>">删除</a></button>
                <textarea  name="commentcontent"   style="display:none"  class="form-control " row='12' ></textarea>
                <button type="submit" class="btn btn-success" id="commentover"  name="commentover" style="display:none" >评论完成</button>
                <button type="button" name="comment"  class='btn btn-primary'>评论</button>
                <textarea  name="newcontent" style="display:none"  class="form-control " row='12' ><?php  echo $msg['content']?></textarea>
                <button type="submit" class="btn btn-success"   name = "editover"style="display:none"  >编辑完成</button>
                 <button type="button" class='btn btn-primary'   name="edit" >编辑</button>
      
            </div>
        </div>
    </div>
    </form>
    <?php
}

?> 
    </div>
<script src="./js/query.js"></script> 


</body>
</html>