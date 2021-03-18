<?php
include('add.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $nickname?>Blog</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
    <div class="jumbotron">
  <h1 class="display-4">Hello,<?php  session_start();echo($_SESSION['nickname']);?>!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

</div>
        <div class='row'  style="display:flex;"    >
            <div class='col-11'>

                <div class="form-group">
                    <form action="query.php" method="POST" onsubmit="return checkLength()">
                        <input name="query" id="input" class='form-control' type='text'>
                </div>
            </div>
            <div class='col-1 d-flex'>
                <div class="form-group ml-auto">
                    <input class='btn btn-primary' type="submit" value='搜索'>
                    </form>
                </div>
            </div>
        </div>
        <form action="blog.php" method="POST" onsubmit="return checkLength()">
            <div class='row'>
                <div class='col-12'>
                    <div class="form-group">
                        <textarea name="content" class="form-control " row='4'></textarea>
                    </div>
                </div>
                <div class='col-3'>
                    <div class="form-group">
                        <input name="username" class='form-control' type='text'>
                    </div>
                </div>
                <div class='col-9 d-flex'>
                    <div class="form-group ml-auto">
                        <input class='btn btn-primary' type="submit" value='提交'>
                        <input class='btn btn-primary' type="reset" value='清空'>
                    </div>
                </div>
            </div>
        </form>

        <?php
        foreach($rows as $key=>$msg ){
           
   ?>
        <form action="update.php?id=<?php echo $msg['id'] ?>" method="POST" onsubmit="return checkLength()">

            <div class='row'>
                <div class='col-12'>
                    <div class='border rounded p-2 mb-2'>
                        <div class='text-primary'>
                            <?php echo $msg['username']; ?>
                        </div>
                        <div>
                            <?php  echo $msg['content' ];?>
                        </div>
                        <button type="button" class="btn btn-info">
                            <?php  echo $msg['reg_date' ];?>
                        </button>
                        <button type="button" class="btn btn-danger" style="underline:none; color:black;"><a
                                style="underline:none; color:white;"
                                href="deletecontent.php? id=<?php echo $msg['id'] ?>">删除</a></button>
                        <div>
                            <?php  echo $msg['comment'];?>
                        </div>
                        <button type="button" class="btn btn-danger" name="deletecomment" id="deletecomment"
                            style="underline:none; color:black;  display:none;"><a style="underline:none; color:white;"
                                href="deletecomment.php? id=<?php echo $msg['id'] ?>">删除</a></button>
                        <textarea name="commentcontent" style="display:none" class="form-control " row='12'></textarea>
                        <button type="submit" class="btn btn-success" name="commentover"
                            style="display:none">评论完成</button>
                        <button type="button" name="comment" class='btn btn-primary'>评论</button>
                        <textarea name="newcontent" style="display:none" class="form-control "
                            row='12'><?php  echo $msg['content']?></textarea>
                        <button type="submit" class="btn btn-success" name="editover" style="display:none">编辑完成</button>
                        <button type="button" class='btn btn-primary' name="edit">编辑</button>

                    </div>
                </div>
            </div>
        </form>
        <?php
}
?>


    </div>

    <script src="./js/blog.js"></script>
</body>

</html>