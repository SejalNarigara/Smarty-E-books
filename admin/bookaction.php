
<?php
if(isset($_POST["sub"]))
{
	   $bi=$_FILES["bookimage"]["name"];
	   $bu=$_FILES["bookurl"]["name"];
	   
       $dst="ibook/".$bi;
	   $dt="ubook/".$bu;
	   
	 $mm= move_uploaded_file($_FILES["bookimage"]["tmp_name"],$dst);
	   move_uploaded_file($_FILES["bookurl"]["tmp_name"],$dt);
	   if($bi=="")
	   {  
		  $dst1= "admin/ibook/default.jpg";
	   }
	   else{
	   $dst1="admin/ibook/".$bi;}
	   $dst2="admin/ubook/".$bu;
	   
	   echo "your ebook upload successfully";
	   ?> <p>&nbsp;</p><a href="../index.php"> Back to index page </a><?php	   
	   
/*	   $m = substr($fnm,-4);
	   if($m==".jpg")
	   {
	
	   }*/   
	   
	   mysql_connect("localhost","root","");
	   mysql_select_db("sebook");
	   
	   mysql_query("insert into usershare values('','$_POST[name]','$_POST[booktitle]','$dst1','$dst2','$_POST[formt]','$_POST[Auther]')");
}
?>