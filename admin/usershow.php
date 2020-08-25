<style type="text/css">
#tabe{
/*vertical-align:middle;*/
background:url(../images/title.gif) repeat-x  right top;
	float:none;
	color:#666;
  	background-color:#2A2A2A;
    min-height: 400px;
    border: 1px solid #333;
    margin-left: 10px;
    padding: 4px;
	margin:5px;
	width: 700px;
	font-style:normal;
	color:#999;
	text-decoration:none;
}
table{  border:#333 1px solid;
 text-decoration:none;
color:#C60;
font-family:Tahoma, Geneva, sans-serif;}
</style><br>

 <center><a href="../index.php">BACK TO INDEX</a>
<body bgcolor="#999999">

<div id="tabe">

<?php 
 mysql_connect("localhost","root","");
mysql_select_db("sebook");
$res=mysql_query("select * from rgs");
$i=0;

while($row=mysql_fetch_array($res))
{
	echo "<p>&nbsp;</p><table>"; 
	$i++;

  echo "<tr>
  <th align='left'>No :</th>
    <td>".$i."</td></tr>
	
	 <tr><th align='left'>Name :</th>
    <td>".$row['Name']."</td></tr>
	<tr>
	<th align='left'>Password :</th>
    <td>".$row['password']."</td>
	</tr>
	<tr>
	<th align='left'>Email :</th>
    <td>".$row['Email']."</td>
	</tr>
	<tr>";
	
echo "</table>";
echo "<table align='right';>";

 echo "</tr>";
 echo "</table><p>&nbsp;</p >";
 echo "----------------------------------------------------";
}
?> </div>
</body>
