<!DOCTYPE html>
<html>
<head>
	<title>NamanClicks -By Naman Vashistha</title>
	<link rel="stylesheet" type="text/css" href="css/styling_index.css">
	<link rel="shortcut icon" href="https://avatars0.githubusercontent.com/u/37183124?s=400&u=a737754a37f2f7343b1dc58687aab0551ba459a7&v=4" />
	<meta  name="theme-color" content="#212121">
	<script type="text/javascript">
		function myFunction() {
    		var x = document.getElementById("drop_down");
    		var y = document.getElementById("images");
    		var z = document.getElementById("footer");
    		if (x.style.display === "none") {
        		x.style.display = "block";
        		y.style.filter= "blur(5px)";
        		z.style.filter= "blur(5px)";
    		} else {
        		x.style.display = "none";
        		y.style.filter= "blur(0px)";
        		z.style.filter= "blur(0px)";
    	 }
} 
	</script>
</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<nav>
		<span><span style="color:#BDBDBD ;margin-left: 2em;">PHOTOGRAPHY </span><span style="color:#616161 ;"> &nbsp;BY NAMAN VASHISTHA</span></span>


		<span onclick="myFunction();"  id="about"   style=" width: 99%; background-color: red; cursor: pointer;"><i style="float: right;margin-top: 16px; text-decoration: none; color:#BDBDBD;" href=""><span style="
		position:relative; top: -11.9px; ">ABOUT</span><img width="30" src="icons/info.png"></i></span>
	</nav>

	<div id="drop_down" >
	<div style="display: inline-flex; width: 90%;">
		<img id="dp" src="https://avatars0.githubusercontent.com/u/37183124?s=400&u=a737754a37f2f7343b1dc58687aab0551ba459a7&v=4">
		<span><span>Hey There,<br>My name is Naman Vashistha.</span><br>
		I am an aficionado photographer from India.<br>
		I never want to be someone who takes predictable, boring photographs.<br>Hope you like my work.</span>
	</div><br><br>
	<div style="color:#616161; font-size: 13px; margin-left: 4%;">
	Share our website<br><br>

	<span id="fb" class="fb-share-button" data-href="http://Namanclicks.rf.gd/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgithub.com/namanvashistha/photography%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
    </span>

	<a style="margin-top: 5px;" href="whatsapp://send?text=Checkout this new photography website by Naman Vashistha.Looks Great.
    https://github.com/namanvashistha/photography" data-action="share/whatsapp/share"><img style="height:20px;
 	border-radius: 3px; width: 68px;" src="icons/whats.png"></a>	
	
	<br><br><p>&copy;namanvashistha</p>
    </div>
	</div>
	


	<div id="images">
		<?php 
		$dir = scandir("images/");
		foreach ($dir as $value) {
			if($value != "." && $value != ".."){
		?>
		<img src="images/<?php echo $value; ?>">
		<?php } } ?>
	</div>

	<footer id="footer">
		<div id="share">
			<div style="background:grsay; z-inddex: 110000;">
				<form style="z-index: -1; position: relative;margin-left:30px; margin-top: 10px;" method="post">
																	Subscribe to get updates<br><br>
					<input id="user_email" type="email" name="user_email" placeholder="Email Address"><br><br>
					<input id="submit_button" onclick="" type="submit" name="submit_button" value="Coming Soon">
					<input id="job" type="hidden" type="" name="job">
				</form>
			</div>

			<div style=""><span align="center" style="left:9%; position:relative; bottom: 3px; bottom: -65px;">&copy;2018 NamanClicks - All rights 				reserved<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Developed By Naman Vashistha</span></div>

		<div>
			<div style=" position: relative; left:10%; top: 10px; ">
				Click to visit our social media platforms<br><br>
				<a target="_blank" href="https://github.com/namanvashistha/photography"><img style="border-radius: 6px;" src="icons/fb.png"></a>&nbsp;&nbsp;
				<a target="_blank" href="https://github.com/namanvashistha/photography"><img style="border-radius: 6px;" src="icons/insta.png"></a>&nbsp;
				<a target="_blank" href="https://github.com/namanvashistha/photography"><img  style="border-radius: 6px;" src="icons/ink.png"></a>&nbsp; / @Namanclicks<br>
				<br>
		<div class="fb-like" data-href="https://www.facebook.com/Namanclicks/" data-width="50px" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
		</div>
		</div>
		</div>
	</footer>
	

</body>
</html>