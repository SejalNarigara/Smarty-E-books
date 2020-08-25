<script language="JavaScript" type="text/javascript" src="js/jquery.js"></script>
<style type="text/css">
#ph{
	background-image:url(images/templatemo_footer_bg.jpg);
	color:#CCC;
	font-size:17px;
	height:30px;
	border:#CCC
	}
</style>
<script language="JavaScript" type="text/javascript" src="js/ajaxmenu.js"></script>
<big style="color:#FFF">Registration</big>

<FORM action="register.php" METHOD=post>

<table width="539" height="262">

<tr>
<td width="249" align="right">User Name :</td><td width="278"><input name="regname" type="text" size"20"/></td>
</tr>
<tr>
<td align="right">email :</td><td><input name="regemail" type="text" size"20"/></td>
</tr>
<tr>
<td align="right">password :</td><td><input name="regpass1" type="password" size"20"/></td>
</tr>
<tr>
<td align="right">retype password :</td><td><input name="regpass2" type="password" size"20"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<a href="javascript:ajaxpage('register.php','ebook_contener');"><input type="submit" value="Register me!" id="ph" name="sub"/></a>
</td>
</tr>
 </table>
</FORM>
