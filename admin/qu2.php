<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
$del=$_REQUEST["id"];
mysql_connect("localhost","root","");
mysql_select_db("sebook");
$res=mysql_query("delete from usershare where id=$del");
?>
<script type="text/javascript">
window.location="qu1.php";
</script>
</body>
</html>
