
<html>
<head>

<title>connection form</title>
</head>

<body>
<?php 
$link=mysql_connect("localhost",'root',"")or die("connection error try later");
mysql_select_db('gallerydb',$link)or die("connection error try later");
?>
</body>
</html>
