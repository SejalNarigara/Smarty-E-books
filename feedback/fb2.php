<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
$r=$_REQUEST["id"];
mysql_connect("localhost","root","");
mysql_select_db("sebook");
$res=mysql_query("delete from fdback where id=$r");
?>
<script type="text/javascript">
window.location="fb1.php";
</script>
</body>
</html>
