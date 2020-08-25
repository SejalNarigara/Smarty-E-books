
<?php
$re=$_REQUEST["id"];
mysql_connect("localhost","root","");
mysql_select_db("sebook");     
$reasult=mysql_query("select * from usershare where id=$re");
		while($row = mysql_fetch_array($reasult))
		{
			$image = $row['Bookimage'];
			$url = $row['Bookurl'];
		}
if($image =="admin/ibook/default.jpg")
{	
mysql_query("delete from usershare where id=$re");
}
else
{
	$pa=$image;
	$ur=$url;
			if(@unlink($pa) && @unlink($ur))
			 {
			 mysql_query("delete from usershare where id=$re");
			 }
			 else
			 {
			 	echo "Image not deleted";
			 }
}
?>
<script type="text/javascript">
window.location="sharedview.php";
</script>
</body>
</html>
