<html>
<head>

<title>AdminLogin Form Query</title>
</head>

<body>
<?php 
include("connection.php"); 
$Username=$_POST["txtunm"];
$Password=$_POST["txtpass"];

if(isset($_POST["login"])=="Login")
{
$q1="select * from admintable where username='$Username'";
$res=mysql_query($q1,$link);
$rows=mysql_fetch_row($res);
$nm=$rows[0];
$pwd1=$rows[1];
if($Username==$nm && $Password==$pwd1)
{
echo "<script>alert('Login Successfull...!')</script>";
header("location:uploadimage.php");
}
else
{
echo "<script>alert('Login Failed')</script>";
header("location:adminlogin.php ? mode=no");
}
}

?>
</body>
</html>
