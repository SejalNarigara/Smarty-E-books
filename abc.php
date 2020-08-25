<form action="abc.php" method="post">
<input type="submit" name="sub" />
</form
<?php
if(isset($_POST['sub']))
{
$path="image.php";
if(@unlink($path)) {echo "Deleted file "; }
else{echo "File can't be deleted";}
}
?>
