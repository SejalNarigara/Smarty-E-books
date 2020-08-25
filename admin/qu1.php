<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sebook");
$res=mysql_query("select * from usershare");
echo "<table>";
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["Bookurl"]; ?>" height="100" width="100">  <?php   echo "</td>";
echo "<td>"; ?> <a href="qu2.php?id=<?php echo $row["id"]; ?>">Delete</a>   <?php echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
