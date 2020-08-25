<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<input type="file" name="userfile">
<input type="submit" name="submit1" value="upload">
</form>
<?php
if(isset($_POST["submit1"]))
{
	   $fnm=$_FILES["userfile"]["name"];
       $dst="./amit/".$fnm;
	   move_uploaded_file($_FILES["userfile"]["tmp_name"],$dst);
	   
	   $dst1="amit/".$fnm;
	   
	   echo $dst1;
	   
	   
	   
/*	   $m = substr($fnm,-4);
	   if($m==".jpg")
	   {
	
	   }*/   
	   
	   mysql_connect("localhost","root","");
	   mysql_select_db("tiku");
	   mysql_query("insert into image1 values('','$dst1')");
	   
	   
	   
	   
	   $res=mysql_query("select * from image1");
	   echo "<table border=2>";
	   while($row=mysql_fetch_array($res))
	   {
	   echo "<tr>";
	   echo "<td>";?><img src="<?php echo $row["path"]?>" height="100" width="100"> <?php echo "</td>";   
	   echo "</tr>";
	   }
	   echo "</table>";
	   
	   
	   
	   
	   
	   
	   
	   
}


?>
</body>
</html>
