<style type="text/css">
option{background:#999;font-family:Tahoma, Geneva, sans-serif; color:#FFF; }
select{background:#333; font-family:Tahoma, Geneva, sans-serif; border:#999 1px solid; color:#FFF;}
</style>
INSERT EBOOK 
<p>
  <input type="submit" name="sub" />
</p>
<?php
if(isset($_POST['sub']))
{
	   $bi=$_FILES["image"]["name"];
	   $bu=$_FILES["url"]["name"];
	   
       $dst="ibook/".$bi;
	   $dt="ubook/".$bu;
	   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
	   move_uploaded_file($_FILES["url"]["tmp_name"],$dt);
	   $dst1="admin/ibook/".$bi;
	   $dst2="admin/ubook/".$bu;
	   echo "your ebook upload successfully";
$da=$_POST['date'];
$mon=$_POST['month'];
$ye=$_POST['year'];
$in=$_POST['sel'];
$dt=$mon."-".$da."-".$ye;
echo $dt;
       mysql_connect("localhost","root","");
	   mysql_select_db("sebook");
	   echo "insert into  $in values('','$_POST[title]','$dst1','$dst2','$_POST[auther]','$dt','$_POST[format]')";
	   
}
?>
<table width="464" border="1">
  <tr>
    <td width="277">Category</td>
    <td width="171"><select name="sel">
      <option>--Select Category--</option>
      <option value="Agri">Agriculture</option>
      <option value="Anth">Anthropology</option>
      <option value="Bot">Botany</option>
      <option value="Cos">Cosmology</option>
      <option value="Dec">Decorative arts</option>
      <option value="Eco">Economics</option>
      <option value="Geog">Geography</option>
      <option value="Geo">Geology</option>
      <option value="His">History</option>
      <option value="Hum">Humanities, ethics</option>
      <option value="Lan">Languages/Regional, Dictionaries</option>
      <option value="Mic">Micro-Biology Physiology</option>
      <option value="Mus">Music</option>
      <option value="Nat">Natural, General, World History</option>
      <option value="Open">Open Access</option>
      <option value="pain">Painting</option>
      <option value="Psy">Psychology</option>
      <option value="Rec">Recreation, Leisure, Fitness</option>
      <option value="Reli">Religion</option>
      <option value="Scul">Sculpture</option>
      <option value="Soc">Sociology</option>
      <option value="Soft">Software</option>
      <option value="Che">Chemistry</option>
      <option value="Com">Computer</option>
      <option>--Select Category--</option>
    </select></td>
  </tr>
  <tr>
    <td>Title :</td>
    <td><input type="text" name="title" /></td>
  </tr>
  <tr>
    <td>book front image :</td>
    <td><input type="file" name="image" /></td>
  </tr>
  <tr>
    <td>Book url : </td>
    <td><input type="file" name="url"  /></td>
  </tr>
  <tr>
    <td>Auther :</td>
    <td><input type="text" name="auther" /></td>
  </tr>
  <tr>
    <td>Release Date :</td>
    <td><select name="date">
      <?php for($i=1; $i<=31; $i++)
{
	 echo "<option>".$i."</option>";
}?>
    </select>
      <select name="month">
        <?php for($j=1;$j<=12;$j++)
{   echo "<option>".$j."</option>";
}?>
    </select>
      <select name="year">
        <?php for($k=1940;$k<=2011;$k++)
{
	echo "<option>".$k."</option>";
}
?>
    </select></td>
  </tr>
  <tr>
    <td>Book format</td>
    <td><input type="text" name="format" /></td>
  </tr>
</table>
