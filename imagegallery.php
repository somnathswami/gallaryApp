<html>
<head>
<title>Image Gallery</title>
</head>
<script src="https://code.jquery.com/jquery-2.2.4.js">/*visit jqreyCDN */</script>
<script src="jquery.facybox.min.js">/*visit fancybox and download it then open folder  open dist folder then copy css,js file and paste in proect folder */
</script>
<link href="jquery.facybox.min.css" rel="stylesheet">
<style>
body{
margin:0;
padding:0;
background:#ccc;
}
main
{
width:80%;
margin:0px auto;
}
.thumbnails
{
width:30%;
float:left;
margin:10px;
background:#fff;
padding:10px;
box-sizing:border-box;
}
.thumbnails img{
	width:100%;
	height:45%;

	/*width:100%;height:auto;*/
}
h1{
    font-size:40;
    color:black;
    text-align:center;
}
h2{
    font-size:20;
    color:black;
    text-align:center;
}
</style>
<body>
<main>
<h1>Image gallery</h1>
<?php
$dir=glob('image/{*.jpg,*.png}',GLOB_BRACE);
foreach($dir as $value){
?>
<div class="thumbnails">
	<a href="<?php echo $value;?>" data-fancybox="images" data-caption="<?php echo $value;?>">
	    <img src="<?php echo $value;?>" alt="<?php echo $value;?>">
    </a>

<h2>Image</h2>
</div>
<?php
}
  
?>

</main>
</body>
</html>