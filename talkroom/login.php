<?php
 include("conn.php");
 	session_start();
   $x=$_POST['username'];
   $m=$_POST['password'];
   $sql="select * from user where Uname='$x' and Upassword='$m'";
   $result=mysqli_query  ($link,$sql );
   $num=mysqli_num_rows($result);
  var_dump($result);
var_dump($x);
var_dump($m);
   if($num ){
   		$_SESSION['username']=$x;
        	echo "<script>alert('登录成功');window.location= '#';</script>";
   }
        
     
   else echo "<script>alert('账号或密码错误');window.location= '#';</script>";	
   	?>
