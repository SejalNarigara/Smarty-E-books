
<?php

$ct=$_GET["cat"];
$re=$_GET["id"];

mysql_connect("localhost","root","");
mysql_select_db("sebook");
$reasult=mysql_query("select * from $ct where id=$re");
		while($row = mysql_fetch_array($reasult))
		{
			$image = $row['image'];
			$url = $row['url'];
		}
if($image =="admin/ibook/default.jpg")
{	
mysql_query("delete from $ct where id=$re");
}
else
{
	$pa=$image;
	$ur=$url;
			if(@unlink($pa) && @unlink($ur))
			 {
			 mysql_query("delete from $ct where id=$re");
			 }
			 else
			 {
			 	echo "Image not deleted";
			 }
}
?>

</body>
</html>
