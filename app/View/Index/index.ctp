<div class= "menu_left">
	<div class= "menu">
		<ul>
			<li id="main" name="main_content"><a href="#">main</a></li>
			<li id="about" name="about_content"><a href="#">about me</a></li>
			<li id="music" name="music_content"><a href="#">music</a></li>
			<li id="gallery" name="gallery_content"><a href="#">gallery</a></li>
			<li id="contact" name="contact_content"><a href="#">contact</a></li>
		</ul>
	</div>
	<div class= "menu_border">
		<div class= "menu_text">
		</div>
	</div>
</div>

<div id= "main_content" class= "wrap">
	<div class= "top">
	</div>
	<div class= "bottom">
	</div>	
</div>

<div id= "about_content" class= "wrap">
	<div class= "top">
	</div>
	<div class= "bottom">
	</div>	
</div>

<div id= "music_content" class= "wrap">
	<div class= "top">
	</div>
	<div class= "bottom">
	</div>	
</div>

<div id= "gallery_content" class= "wrap">
	<div class= "top">
	</div>
	<div class= "bottom">
	</div>	
</div>

<div id= "contact_content" class= "wrap">
	<div class= "top">
	</div>
	<div class= "bottom">
	</div>	
</div>

<script type="text/javascript">
	$(function() {
		$('.menu_left').hover(
			function (){
				$('.menu_left').animate({'marginLeft': '0px'}, 350, "easeOutCirc");
			},
			function (){
				//$(this).stop().animate({'marginLeft':'-2px'},200);
				$('.menu_left').animate({'marginLeft': '-169px'}, 400, "easeOutCirc");
				// alert($(this).attr('class'));
			}			
		);
		$('.menu li a').hover(
			function (){
				$(this).animate({'color': 'white'}, 350, "easeOutCirc");
			},
			function (){
				//$(this).stop().animate({'marginLeft':'-2px'},200);
				$(this).animate({'color': '#ABABAB'}, 200, "easeOutCirc");
				// alert($(this).attr('class'));
			}			
		);
		$('.menu li').click(
			function (){
				$('.wrap').animate({'marginLeft': '358px', 'opacity': 'hide'}, 200, "easeOutCirc");
				var name= "#";
				name= name + $(this).attr('name');
				$(name).animate({'display': 'show', 'marginLeft': '-200px'}, 300, "easeOutCirc");
			}
		);
	});
			
</script>