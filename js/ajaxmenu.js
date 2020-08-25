var myMenu;
	window.onload = function()
	 {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};

	
	var loadedobjects=""
var rootdomain="http://"+window.location.hostname

function ajaxpage(url, containerid){
var page_request = false
if (window.XMLHttpRequest) // if Mozilla, Safari etc
page_request = new XMLHttpRequest()
else if (window.ActiveXObject){ // if IE
try {
page_request = new ActiveXObject("Msxml2.XMLHTTP")
} 
catch (e){
try{
page_request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch (e){}
}
}
else
return false
page_request.onreadystatechange=function(){
loadpage(page_request, containerid)
}
page_request.open('GET', url, true)
page_request.send(null)
}

function loadpage(page_request, containerid){
if (page_request.readyState == 4 && page_request.status==200){
	document.getElementById(containerid).innerHTML=page_request.responseText
}else
		{
			obj.innerHTML ='<div style="width:570;margin-left:10px; margin-right:10px;margin-top: 10px;background: #3470DE;height:32px;color:white;padding-top:3px;padding-bottom:3px;"><center><b><span style="font-size:22px">Loding.....</span></b></center></div>'
		}
		

}

function loadobjs(){
if (!document.getElementById)
return
for (i=0; i<arguments.length; i++){
var file=arguments[i]
var fileref=""

if (fileref!=""){
document.getElementsByTagName("head").item(0).appendChild(fileref)
loadedobjects+=file+" " //Remember this object as being already added to page
}
}
}


var cartip=document.createElement("div") //Dynamically create tooltip element
cartip.setAttribute("id", "cartooltip")
document.body.appendChild(cartip)
var cartooltipobj=document.getElementById("cartooltip")
var rightcolumnobj=document.getElementById("rightcolumn")

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

document.getElementById("rightcolumn").onmouseover=function(){ //show tooltip
var titletext=document.getElementById("cartitle")? document.getElementById("cartitle").innerHTML : "DD Forums Archive"
cartooltipobj.innerHTML=titletext
cartooltipobj.style.left=rightcolumnobj.offsetLeft+rightcolumnobj.offsetWidth-180+"px"
cartooltipobj.style.top=rightcolumnobj.offsetTop+rightcolumnobj.offsetHeight-40+"px"
cartooltipobj.style.visibility="visible"
}

document.getElementById("rightcolumn").onmouseout=function(){ //hide tooltip
document.getElementById("cartooltip").style.visibility="hidden"
}
