<?php
 include("conn.php");
 session_start();
 $x=$_POST['username'];
 $m=$_POST['password'];
 $sql="select * from user where Uname='$x' ";
   $result=mysqli_query  ($link,$sql );
   $num=mysqli_num_rows($result);
  if(!$num){ 
 $sql="insert into user (Uname,Upassword) values ('$x','$m');";
  if(mysqli_query($link,$sql)){
        $_SESSION['username']=$x;
  	echo "<script>alert('注册成功');window.location= '#'</script>"; 
  }}
  else echo "账号已存在";
