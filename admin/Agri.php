<?php 
session_start();
if(!$_SESSION[user])
{
echo ""?><marquee>Please login for any proceess with our site  and  Download  our   ebooks </marquee><?php "";
}
else
{ ?> Shared ebooks <?php }
?>
<body>
<p>&nbsp;</p>
<?php
   mysql_connect("localhost","root","");
	   mysql_select_db("sebook");
$res=mysql_query("select * from agri");
	   echo "<table border=2>";
	   while($row=mysql_fetch_array($res))
	   {

echo "<table width='500' height='100'>
  <tr>";
    
   echo "<td width='87' rowspan='6' align='right'>"; ?> <img src="<?php echo $row['Bookimage']?>" height="150" width="100">
  <?php
 echo "</tr><tr><td>Shared Name : ".$row['Yourname']."</td></tr>";
 echo "<tr><td>Book Name : ".$row['Booktitle']."</td></tr>
  <tr><td>Book format :".$row['bookformate']. "</td></tr>
  <tr><td>Auther : ".$row['Auther']. "</td></tr>
  <tr align='right'><td>"; 
  
  if($_SESSION[user])
  {
	  ?> <a href=" <?php echo $row['Bookurl']; ?>"> Download </a> <?php
  }
   echo "</td></tr></table><p>&nbsp;</p>";
 } 
 ?>
</body>