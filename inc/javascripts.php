<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.4.2.min.js"%3E%3C/script%3E'))</script>
	<script src="js/scripts.js"></script>

	<!--[if lt IE 7 ]>
		<script src="js/dd_belatedpng.js"></script>
		<script> DD_belatedPNG.fix('.png'); </script>
	<![endif]-->


	<!-- change the UA-XXXXX-X to be your site's ID -->
	<script>
		var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
		(function(d, t) {
		var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
		g.async = true;
		g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s);
		})(document, 'script');
		
		$(document).ready(function(){
			$('#tabs_workout div').hide();
			$('#tabs_workout div:first').show();
			$('#tabs_workout ul li:first').addClass('active');
			
			$('#tabs_workout ul li a').click(function(){
				$('#tabs_workout ul li').removeClass('active');
				$(this).parent().addClass('active');
				var currentTab = $(this).attr('href');
				$('#tabs_workout div').hide();
				$(currentTab).show();
				return false;
			});
			
			$('#tabs_news div').hide();
			$('#tabs_news div:first').show();
			$('#tabs_news ul li:first').addClass('active');
			
			$('#tabs_news ul li a').click(function(){
				$('#tabs_news ul li').removeClass('active');
				$(this).parent().addClass('active');
				var currentTab = $(this).attr('href');
				$('#tabs_news div').hide();
				$(currentTab).show();
				return false;
			});

		});
		
		
	</script>
