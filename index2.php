<link href="css/cssindex.css" rel="stylesheet" type="text/css" />
<link href="css/ajaxmanu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/menu.css" type="text/css" />
<link rel="stylesheet" href="css/sdmenu.css" type="text/css"/>
<script language="javascript" type="text/javascript" src="js/sdmenu.js"></script>

<body>
<div id="ebook_content">
 <div id="ebook_content_left">
   	  <div class="ebook_content_left_section">
          <div style="float: left" id="my_menu" class="sdmenu">
          <div>
        <span>Ebook Format</span>
        <p><a href="javascript:ajaxpage('ebookfor/pdf.php', 'ebook_contener');">PDF</a></p>
        <p><a href="javascript:ajaxpage('ebookfor/txt.php', 'ebook_contener');">TXT</a></p>
        <p><a href="javascript:ajaxpage('ebookfor/doc.php', 'ebook_contener');">DOC</a></p>
        <p><a href="javascript:ajaxpage('ebookfor/jip.php', 'ebook_contener');">ZIP</a></p>
        <p><a href="javascript:ajaxpage('ebookfor/rar.php', 'ebook_contener');">RAR</a></p>
      </div>
      <div>
        <span>Categories</span>
        <a href="#">Computer & internet</a>
        <a href="#">Business</a>
        <a href="#">Novels</a>
        <a href="#">Short Stories</a>
        <a href="#">Education & Learning</a>
        <a href="#">Family & Kids</a>
      </div>
      <div class="collapsed">
        <span>Other</span>
        <a href="#">Painting</a>
        <a href="#">Computer</a>
        <a href="#">Languege</a>
        <a href="#">Novels</a>
      </div>
    </div>
    <div style="padding-left: 100px">
      <pre>&nbsp;
</pre>
      <p>&nbsp;</p>
    </div>
        <h1>Bestsellers</h1>              
    </div>
  </div> <div id="ebook_content_righttop">
<div class="ebook_content_left_section">

         <?php include("include/news.php");?>
                </p></ul>
        	</div>
  </div>     <div id="ebook_contener">
             <?php include('include/Slider.php');?> </div>
      	<div class="cleaner_with_height">&nbsp;
        </div>
</div> 

    
    	<div class="cleaner_with_height">&nbsp;</div>
</div>

</body>
</html>