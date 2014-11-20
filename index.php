<html>
<head>
	<title>jQuery Hover Image Replace</title>
	<meta name="description" content="jQuery hover image replace, jQuery Hover Function, Replace Image on Hover">
    <meta name="keywords" content="jQuery Hover, Image replace, jquery functions, jquery snippets, javascript image hover, hover, image, replace">
</head>
<body>
<div style="text-align:center;margin-top:20px;">
	<h1>jQuery Hover Image Replace</h1>
	<img src="http://placehold.it/250/dddddd/000000" data-offhover="http://placehold.it/250/dddddd/000000" data-hover="http://placehold.it/250/000000/ffffff" class="hoverItem">
	<img src="http://placehold.it/250/2ecc71/bdc3c7" data-offhover="http://placehold.it/250/2ecc71/bdc3c7" data-hover="http://placehold.it/250/34495e/7f8c8d" class="hoverItem">
	<img src="http://placehold.it/250/dddddd/000000" data-offhover="http://placehold.it/250/dddddd/000000" data-hover="http://placehold.it/250/000000/ffffff" class="hoverItem">
	<img src="http://placehold.it/250/2ecc71/bdc3c7" data-offhover="http://placehold.it/250/2ecc71/bdc3c7" data-hover="http://placehold.it/250/34495e/7f8c8d" class="hoverItem">
	<img src="http://placehold.it/250/dddddd/000000" data-offhover="http://placehold.it/250/dddddd/000000" data-hover="http://placehold.it/250/000000/ffffff" class="hoverItem">
	<img src="http://placehold.it/250/2ecc71/bdc3c7" data-offhover="http://placehold.it/250/2ecc71/bdc3c7" data-hover="http://placehold.it/250/34495e/7f8c8d" class="hoverItem">
	<img src="http://placehold.it/250/dddddd/000000" data-offhover="http://placehold.it/250/dddddd/000000" data-hover="http://placehold.it/250/000000/ffffff" class="hoverItem">
	<img src="http://placehold.it/250/2ecc71/bdc3c7" data-offhover="http://placehold.it/250/2ecc71/bdc3c7" data-hover="http://placehold.it/250/34495e/7f8c8d" class="hoverItem">
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
    	$(".hoverItem").hover( function () {
    		$this = $(this);
		  	var on = $this.attr('data-hover');
		  	$this.attr('src', on);
		}, function() {
			var off = $this.attr('data-offhover');
		  	$this.attr('src', off);
		});
	});
</script>
</body>

</html>