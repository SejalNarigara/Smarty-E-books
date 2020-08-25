<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<style>
table{
	color:#999;
	font:Tahoma, Geneva, sans-serif;}
</style>
<script language="JavaScript" type="text/javascript" src="js/ajaxmenu.js"></script>
<script language="javascript" type="text/javascript" src="js/crawler.js"></script>
<script language="javascript" type="text/javascript" src="js/sdmenu.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon" /> 
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
         <?php include('sdmanu.php');?>
  </div> 
  <div id="ebook_content_righttop">
<div class="ebook_content_left_section">
<!-- ------------------------------------------------------------------------------------------------
 -->  
  <form action="index.php" method=post>
<?php
if( $_SESSION["logging"]&& $_SESSION["logged"])
{
     print_secure_content();
}
else {
    if(!$_SESSION["logging"])
    {  
    $_SESSION["logging"]=true;
    loginform();
    }
       else if($_SESSION["logging"])
       {
         $number_of_rows=checkpass();
         if($number_of_rows==1)
            {	
	         $_SESSION[user]=$_POST[userlogin];
	         $_SESSION[logged]=true;
	         print"<h1>you have loged in successfully</h1>";
	         print_secure_content();
            }
            else{
                 loginform();
            }
        }
     }
     
function loginform()
{
print ("<div id='border'><table width='198' height='140' bordercolorlight='#666666'><tr><td height='25' colspan='2' align='center' style='background-color:#552B00'><strong><big>Login </big></strong></td>
    </tr><tr><td width='190'><p><strong>Username:</strong>
     <input type='text' name='userlogin' id='txtuser' style='width:170px'>
     </p></td></tr>
    <tr><td><strong>Password:<br></strong><input type='password' name='password' id='txtpass' style='width:170px'></td></tr></table></div>");
print "<input type='submit' value='Login' >";	
?><h3> <a href="javascript:ajaxpage('registerform.php', 'ebook_contener');">Register now!</a></h3> <?php	
}

function checkpass()
{
$servername="localhost";
$username="root";
$conn=  mysql_connect($servername,$username)or die(mysql_error());
mysql_select_db("sebook",$conn);
$sql="select * from rgs where name='$_POST[userlogin]' and password='$_POST[password]'";

$result=mysql_query($sql,$conn) or die(mysql_error());
while($r=mysql_fetch_array($result))
{
	if($r[0]==1)
	{
		$_SESSION[admin]=$_POST[userlogin];
	         $_SESSION[logged]=true;
	}
	
}

return  mysql_num_rows($result);
}

function print_secure_content()
{
	print("<b><h1>hi mr.$_SESSION[user]</h1>");
    print("<center><a href='logout.php'><img src='.//images/logout.png'></a><br>");	
	print("<big>Logout</big></center>");
}
?>
</form>
<!----------------------------------------------------------------------------------------------------->
         <?php include("include/news.php");?>
                </p></ul>
        	</div>
  </div>     <div id="ebook_contener">
             
<?php 
session_start();
if(!$_SESSION[user])
{
echo ""?><marquee>Please login for any proceess with our site  and  Download  our   ebooks </marquee><?php "";
}
else
{?> Shared ebooks <?php }
?>
<body>
<p>&nbsp;</p>
<?php
   mysql_connect("localhost","root","");
	   mysql_select_db("sebook");
$res=mysql_query("select * from usershare");
	   echo "<table border=2>";
	   while($row=mysql_fetch_array($res))
	   {

echo "<table width='500' height='100'>
  <tr>";
    
   echo "<td width='87' rowspan='6' align='right' background='../images/default.jpg'>";?> <img src="<?php echo $row['Bookimage']?>" height="150" width="100">
  <?php
 echo"</tr><tr><td>Shared Name : ".$row['Yourname']."</td></tr>";
 
echo "<tr><td>Book Name : ".$row['Booktitle']."</td></tr>
  <tr><td>Book format :".$row['bookformate']. "</td></tr>
  <tr><td>Auther : ".$row['Auther']. "</td></tr>
  <tr align='right'><td>"; 
  if($_SESSION[user])
  {
	  ?> <a href=" <?php echo $row['Bookurl']; ?>"> Download </a> <?php
  }
  if($_SESSION[admin])
  {
	  ?><a href="./deleteshare.php?id=<?php echo $row['id']; ?>"> &nbsp; Delete </a><?php 
  }
   echo "</td></tr>
</table>
<p>&nbsp;</p>";
 } ?>
 </div>
      	<div class="cleaner_with_height">&nbsp;
        </div>
</div> 
    	<div class="cleaner_with_height">&nbsp;</div>
</div>
 
  <?php include('footer.php');
  ?> 
 </body>



