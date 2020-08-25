<?php 
session_start();
{
	?>
<style type="text/css">
#ph{ 
	color:#333;
	font-size:17px;
	height:45px;
	width:128.5px;
	border:#630 5px double;
	background-color:#CCC;
	}

</style>
<script language="JavaScript" type="text/javascript" src="../js/ajaxmenu.js"></script>
<script language="javascript" type="text/javascript" src="../js/crawler.js"></script>
<script language="javascript" type="text/javascript" src="../js/jquery.min.js"></script>
<link rel="shortcut icon" href="../images/icon.jpg" type="image/x-icon" /> 
<title>Smarty Books</title>
<link href="../css/cssindex.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../css/sagscroller.css" type="text/css"/>
</script>
<body>
<a href="../smarty ebook/index.php"> Back </a>
<div id="ebook_content">
  <p>&nbsp;</p>
   
  <p> <a href="../smarty ebook/feedback/fb3.php"><input name="feedback" type="submit" id="ph" value="Feedback" border="5"></a>
       
   <a href="../smarty ebook/admin/insertc.php"> <input type="submit" name="category" value=" Category" id="ph"/></a>
 
    <a href="../smarty ebook/admin/usershow.php"><input type="submit" name="user" value="User" id="ph"/></a>
  </p>
</div>
</body>
<?php
}
?>