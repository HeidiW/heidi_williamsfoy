<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Heidi Williams-Foy</title>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="image/png" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/style.scss">
	<link rel="stylesheet" href="style/skeleton.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
	<div class="container">
		<!-- <div class="top" style="padding-top:3px;"> -->
		<div class="photo column one-half">
			<div id="scale-up" style="height: 230px">
 				<img src="http://i.imgur.com/PQgBk5C.jpg" alt="">
			</div>
		</div>

		<div class="content column one-half">
			<h1 id="me">Heidi Williams-Foy</h1>
			<p>I'm a web developer and content strategist based in New York City. I'm currently freelancing and looking for a full-time front end developer position. Check out my <a target="_new" href="https://github.com/HeidiW">Github</a>, or <a href="mailto:heidi.williamsfoy@gmail.com">email me</a> and say hi!</p>
			<p>Find me on <a target="_new" href="https://twitter.com/heidifoy">Twitter @ heidifoy</a>. More on <a target="_new" href="https://www.linkedin.com/in/heidiwilliamsfoyLinkedIn">LinkedIn</a>.</p>
		</div>

		
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
function center() {
	var window_height = $(window).height();
	var textHeight = (window_height-180);
	var marginMargin = (textHeight/2)

	$(".top").css({"padding-top":marginMargin});
};
    $(document).ready(function(){
    	center();
    $("body").css({"opacity":"1"});
});
    $(window).resize(function(){
    	center();
});
    </script>
</body>
</html>