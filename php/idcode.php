<?php
session_start();//开启会话
$img = imagecreatetruecolor(60, 30);//创建真彩图像资源，大小60*30
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);//分配一个黑色
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);//分配一个绿色
$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);//分配一个白色
imagefill($img,0,0,$white);// 从左上角开始填充白色，即背景颜色为白色
//生成随机的验证码
$code = '';
for($i = 0; $i < 4; $i++) {
    $code .= rand(0, 9);
}
$_SESSION['vCode']=$code;//加入会话变量中
imagestring($img, 5, 8, 8, $code, $black);//imagestring ($image , $font , $x , $y ,$s ,$col )
//加入噪点干扰，阻止机器识别
for($i=0;$i<100;$i++) {
    imagesetpixel($img, rand(0, 60) , rand(0, 30) , $black);//在图片上绘出一点。参数 x、y 为欲绘点的坐标，参数 col 表示该点的颜色
    imagesetpixel($img, rand(0, 60) , rand(0, 30) , $green);//绘制绿色的点
}
//输出验证码
header("content-type: image/png");//说明欲输出的图片类型格式
imagepng($img);//函数用来建立一张 PNG 格式图形
imagedestroy($img);//销毁图像,释放与 $img 关联的内存