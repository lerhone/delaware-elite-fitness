<?
$title = 'Home';
$nav_on = 'home';

include('inc/header.php'); ?>	
	
	<div id="contentmain">
	
		<div id="contentmain_left">
			<div id="callout_home_wrapper">
				<p class="callout_home">Pain of discipline,</p>
				<p class="callout_home">Pain of regret</p>
				<p class="callout_home blue">Take your pick</p>
			</div>
			<!--end #callout_home_wrapper -->
				
			<h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit pellentes que aliquet.</h3>
				
			<p>Sed egestas, ante et <a href="#">vulputate</a> volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volu tpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
				
			<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor.</p>
				
			<a class="btn left" href="#">Click  here to get started <span class="arrow_right">&rsaquo;</span></a>
				
			<div id="wrapper_schedule" class="left">
				<h2 class="txt_headline left">Schedule Classes</h2>
				<ul id="schedule">
					<li class="first"><img src="images/img_schedule_1.jpg" width="138" height="90" alt="Schedule"></li>
					<li><img src="images/img_schedule_2.jpg" width="138" height="90" alt="Schedule"></li>
					<li class="last"><img src="images/img_schedule_3.jpg" width="138" height="90" alt="Schedule"></li>
				</ul>
				<div class="btn_wrapper left">
					<a class="btn left first" href="#">Lewes schedule <span class="arrow_right">&rsaquo;</span></a>
					<a class="btn left last" href="#">Riverfront schedule <span class="arrow_right">&rsaquo;</span></a>
				</div>
			</div>
			<!--end #wrapper_schedule -->
		</div>
		<!-- end #contentmain_left -->
		
		<div id="contentmain_right">
			<? include('inc/workouts-news.php'); ?>
		</div>
		<!-- end #contentmain_right -->
		<div class="clear"></div>
	</div>
	<!-- end #contentmain -->

<? include('inc/footer.php'); ?>