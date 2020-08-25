<link rel="stylesheet" type="text/css" href="css/sagscroller.css" />
<script type="text/javascript" src="js/sagscroller.js">
</script>

<style type="text/css">
#border{
	border:solid #333 1px;
}


div#mysagscroller{
width: 200px;  
height:250px;
}

div#mysagscroller ul li{
background:navy;
color:white;
padding:5px;
margin-bottom:5px; 
}

div#mysagscroller ul li:first-letter{
font-size:28px;
background:white;
color:black;
padding:0 2px;
margin-right:2px;
}




div#mysagscroller2{
width: 188px; 
height:250px;
border:2px solid #C0C0C0;
}

div#mysagscroller2 ul li img{
border-width:1;
display:block; }

</style>

<script>
var sagscroller1=new sagscroller({
	id:'mysagscroller',
	mode: 'manual' 
})



var sagscroller2=new sagscroller({
	id:'mysagscroller2',
	mode: 'auto',
	pause: 2500,
	animatespeed: 400 
})

</script>
<body><p>&nbsp;

</p>
<div id="border">
<table width="197">
    <tr>
      <td width="190" height="25" align="center" style="background-color:#552B00"><big><big>News</big></big></td>
    </tr>
    <tr>
    <td>
<div id="mysagscroller2" class="sagscroller">
	<ul>
	<li><a href="#"><img src="images/ebook_image_01.jpg" width="189" height="255"/></a></li>
	<li><a href="#"><img src="images/ebook_image_02.jpg" width="189" height="255"/></a></li>
    <li><a href="#"><img src="images/ebook_image_04.jpg" width="189" height="255"/></a></li>
    <li><a href="#"><img src="images/ebook_image_03.jpg" width="189" height="255"/></a></li>
	</ul></div>
    </td></tr>
</table>
</div>
</body>
