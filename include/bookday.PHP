<script type="text/javascript" src="../js/crawler.js"></script>
<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler',
	style: {
		'padding': '0px',
		'width': '150px',
		},
	inc: 8, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 4,
	neutral: 200,
	savedirection: true
});
</script>
<div class="marquee" id="mycrawler2">
<img src="images/book.jpg" /> 

</div>

<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler2',
	inc: 10, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 2,
	neutral: 150,
	savedirection: true,
	random: true
});
</script>