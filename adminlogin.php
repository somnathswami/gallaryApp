
<html>
<head>
<title>Admin Login</title>
<link href="css/buttonstyle.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function valid()
{

var unm,pass;
unm=document.getElementById('txtunm').value;
pass=document.getElementById('txtpass').value;

if(unm=="")
{
alert("please enter User Name");
document.getElementById('txtunm').focus();
return false;
}
if(pass=="")
{
alert("please enter Password");
document.getElementById('txtpass').focus();
return false;
}

return true;
}

</script>
</head>
<body style="border:1px solid black">
<div>
<?php 
	
	if(isset($_POST["mode"])=="no")
	{
echo "<script>alert('Invalid User Name or Password!')</script>";
    }
	?>			
<form id="form1" name="form1" method="post" action="uploadimage.php">
<table align="center" cellpadding="7" cellspacing="7">
<br />
<br />
<br />

<tr>
<td><b>User Name:</b></td>
<td><input type="text" id="txtunm" name="txtunm" /></td>
</tr>

<tr>
<td><br />
<br /><b>Password:</b></td>
<td><br />
<br /><input type="password" id="txtpass" name="txtpass" /></td>
</tr>
<tr>
<td><br />
<br /><button class="button button1" type="submit" name="login" value="Login" onclick="return valid();">Login</button></td>
<td><br />
<br /><button class="button button2" type="reset" name="clear" value="Clear">Clear</button></td>
</tr>
</table>
</form>
</body>
</html>