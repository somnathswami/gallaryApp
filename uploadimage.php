<?php
error_reporting(0); 
?> 

  
<!DOCTYPE html> 
<html> 
<head> 
<title>Admin Image Upload</title> 
<style>
.header{
	
	background-color:lightblue;
	height:80px;
}
.footer{
	background-color:lightblue;
	height:60px;
}
body{
margin:0;
padding:0;

}
</style>
</head>
<body >
<center>
<div class="header">
<h1>Admin page to upload files</h1>
</div>
</center>
<div class="section">
<div id="content" style="border:2px solid black"> 

  <center>
<br/>
  <form method="POST" action="" enctype="multipart/form-data"> 
      <input type="file" name="uploadfile" value=""/> 
        <br/><br/><br/>
         <div>
          <button type="submit" name="upload">Upload</button> <br/><br/><br/>
        </div>
  </form> 
  </center>
</div>
</div> 
<center>
<div class="footer">
<h2>This website created by Miss.Anuradha Sambhaji Patil</h2>
</div>
</center>
</body> 
</html>
<?php
// Start the session
session_start();
?> 
<?php
  $msg = ""; 
 
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename; 
             
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully";
           echo $msg."<br/><br/>";
		   echo "<img src='$folder' height='100' width='100'/>";
       
          	 header("Location:imagegallery.php");  
        }else{ 
            $msg = "Failed to upload image"; 
			echo $msg;
      } 
  } 
 
?> 

