<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script language="JavaScript" type="text/javascript" src="js/ajaxmenu.js"></script>
<script language="javascript" type="text/javascript" src="js/crawler.js"></script>
<script language="javascript" type="text/javascript" src="js/sdmenu.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smarty Books</title>
<link href="css/cssindex.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/sdmenu.css" type="text/css"/>
<link rel="stylesheet" href="css/sagscroller.css" type="text/css"/>
</script>
<body>
   <?php 
   session_start();
   include('menu.php');
   ?>
   <div id="ebook_content">
 <div id="ebook_content_left">
   	  <div class="ebook_content_left_section">
          <div style="float: left" id="my_menu" class="sdmenu">
          <div>
          <?php include('sdmanu.php'); ?>
  </div> 
  <div id="ebook_content_righttop">
<div class="ebook_content_left_section">
<!-- ------------------------------------------------------------------------------------------------
 -->  
<!----------------------------------------------------------------------------------------------------->
         <?php include("include/news.php");?>
            </p></ul>
        	</div>
  </div>     <div id="ebook_contener">
             <?php  if(isset($_POST['sub']))
 {
	 include('include/connection.php');
    $sql="insert into fdback  values('','$_POST[nm]','$_POST[ct]','$_POST[m]','$_POST[email]','$_POST[phone]','$_POST[subject]')";
    $result=mysql_query($sql) or die(mysql_error());		
    print "<p>&nbsp;</p><h1>your Feedback upload sucsessFully </h1>";
   	}
?> </div>
      	<div class="cleaner_with_height">&nbsp;
        </div>
</div> 
    	<div class="cleaner_with_height">&nbsp;</div>
</div>
 
  <?php include('footer.php');
  ?> 
 </body>
