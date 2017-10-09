<?php
session_start();
//随机生成验证码的字符串
function random($len) {
    $srcstr="abcdefghjkmn1234567890";
    for($i=0;$i<$len;$i++) {
        @$strs.=$srcstr[mt_rand(0,strlen($srcstr)-1)];
    }
    return ($strs);
}
$str=random(5); //随机生成的字符串
$width=80;  //验证码图片的宽度
$height=44; //验证码图片的高度
//Date in the past
header("Expires:Mon,26 Jul 1997 05:00:00 GMT");
//always modified  标记内容最后修改时间
header("Last-Modified:".gmdate("Mon,26 jul 1997 05:00:05")."GMT");
//HTTP/1.1 内容过期时间 
header("Cache-Control:no-store,no-cache,must-revalidate");
header("Cache-Control:post-check=0,pre-check=0",false);
//HTTP/1.0
header("Pragma:no-cache");

header("Content-Type:image/png");
 
$im=imagecreate($width,$height);
$back=imagecolorallocate($im,0xCA,0xEA,0xAB);    //背景色
$pix=imagecolorallocate($im,200,220, 80);    //200 220 160    //模糊点颜色
$font=imagecolorallocate($im,0,80,255);        //字体色
//绘制1000个模糊作用的点
mt_srand();
for($i=0;$i<600;$i++) {
    imagesetpixel($im,mt_rand(0,$width),mt_rand(0,$height),$pix);
}
imagestring($im,5,7,5,$str,$font);//绘制随机生成的字符串
//imagerectangle($im,0,0,$width-1,$height-1,$font);//在验证码图像周围绘制1px的边框
imagepng($im);//建立一张PNG格式图形
imagedestroy($im);//将图片handle解构，释于内存空间
$_SESSION["auth_code"]=$str;
?>