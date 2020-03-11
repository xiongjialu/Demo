<?php
/**
 * Created by PhpStorm.
 * User: xiong
 * Date: 2020/3/11
 * Time: 14:45
 */
$con=mysqli_connect("127.0.0.1","root","root","web1"); //连接数据库，且定位到数据库web1
if(!$con){die("error:".mysqli_connect_error());} //如果连接失败就报错并且中断程序
$user=$_GET['reg_user'];
$pass=$_GET['reg_pass'];
$pass1=$_GET['reg_pass1'];
if($user==null||$pass==null){
    echo "<script>alert('信息错误！')</script>";
    die("账号和密码不能为空!");
}else if($pass!=$pass1){
    echo "<script>alert('2次密码不一致！')</script>";
} else{
    //$sql='select * from test where user='."'{$user}'and password="."'$pass';";
    $sql_ins = "insert into test(user,password) values('$user','$pass')";
    $res=mysqli_query($con,$sql_ins);
    if($res!=0)
    {
        echo "<h1>注册成功！{$user}！</h1>";
    }
    else
    {
        echo "用户名或密码错误";
    }
}
?>

