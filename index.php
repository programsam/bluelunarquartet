<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Moonlight 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110815

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Blue Lunar Quartet</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="http://bluelunarquartet.com/favicon.ico" />
<script type="text/javascript" src="jquery-1.8.2.js"></script> 
<script type="text/javascript">              
	
	$(document).ready(function() {
		if (document.location.hash != "")
		{
			if (document.location.hash == "#dates")
				loadLink("dates.html", "dates");
			else if (document.location.hash == "#contact")
				loadLink("contact.html", "contact");
			else
				loadLink("home.html", "home");
		}
		else
		{
			loadLink("home.html", "home");
		}
	});
	
	
	function loadLink(url, active)
	{
		$('iframe#theiframe').attr('src', url);
		
		$('li#dates').removeClass('current_page_item');
		$('li#photos').removeClass('current_page_item');
		$('li#home').removeClass('current_page_item');
		$('li#contact').removeClass('current_page_item');
		
		$('li#'+active).addClass('current_page_item');
	}
</script>    
</head>
<body>
<div id="wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Blue Lunar Quartet</a></h1>
			<p><br />
			<a target="_blank" href="mailto:bluelunar@bluelunar.zapto.org">
				<img width=30 height=30 src="pics/email-icon.jpg" border=0 /></a>
			<a target="_blank" href="https://www.facebook.com/BlueLunarQuartet">
				<img width=35 height=30 src="pics/facebook.png" border=0 /></a>
			<a target="_blank" href="http://soundcloud.com/bluelunarquartet/">
				<img width=30 height=30 src="pics/soundcloud.png" border=0 /></a>
			<a target="_blank" href="http://twitter.com/#!/bluelunar4">
				<img width=35 height=30 src="pics/twitter-bird.png" border=0 /></a>
			<a target="_blank" href="http://www.youtube.com/user/bluelunarquartet?feature=watch">
				<img width=35 height=30 src="pics/youtube_icon.png" border=0 /></a>
			<a target="_blank" href="http://bluelunarquartet.bandcamp.com">
				<img width=35 height=30 src="pics/bandcamp.png" border=0 /></a>
			<a target="_blank" href="http://www.cafepress.com/bluelunarquartet">
				<img width=35 height=30 src="pics/cafepress.gif" border=0 /></a>
				</p>
		</div>
		<div id="menu">
			<ul>
				<li id="home" class="current_page_item"><a href="javascript:loadLink('home.html', 'home')">Home</a></li>
				<li id="dates"><a href="javascript:loadLink('dates.html', 'dates')">Dates</a></li>
				<li id="photos"><a href="photos.php">Photos</a></li>
				<li id="contact"><a href="javascript:loadLink('contact.html', 'contact')">Contact</a></li>
			</ul>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="content" style="background-color:transparent">
		<iframe id="theiframe" width=500 height=600 src="" frameborder=0 ALLOWTRANSPARENCY="true" ></iframe>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>music</h2>
					<p>
					<object type="application/x-shockwave-flash" width="400" height="438" data="http://bluelunar.zapto.org/MusicPlayer.swf">
					<param name="movie" value="http://bluelunar.zapto.org/MusicPlayer.swf" />
					</object>
					</p>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>

<div id="footer">
	<p>Copyright &copy;2012 Blue Lunar Quartet, Ben Smith, Carter Harris, Andy Powell, Chad Mangum. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
