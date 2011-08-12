<?
$title = 'News';
$nav_on = 'news';

include('inc/header.php'); ?>	
	
	<div id="contentmain" class="subpage">
	
		<div id="contentmain_left">
			
			<div class="content_block left">
				<div class="content_block_top left">
					<h2 class="txt_headline left">News <small>&</small> Announcements</h2>
				</div>
				
				<div class="post left full">
					<div class="title"><a href="/post.php">Entry title goes here aliquam tincidunt mau ris eu risus auctor dapibus neque</a></div>
					<div class="meta">
						<span class="author">by <a href="#">Meredith</a></span> on
						<span class="date">May 3, 2011</span> --
						<span><a href="#">39 Comments</a> </span>
					</div>
					<p>Sed egestas, ante et <a href="#">vulputate</a> volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volu tpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

					<p>Sed egestas, ante et <a href="#">vulputate</a> volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volu tpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

					<p>Sed egestas, ante et <a href="#">vulputate</a> volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volu tpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
					
				</div>
				<!-- end .post -->
				
			</div>
			<!-- end .content_block -->
		</div>
		<!-- end #contentmain_left -->
		
		<div id="contentmain_right">
			<? include('inc/workouts.php'); ?>
			
			<div id="categories_wrapper" class="left">
				<h2 class="txt_headline left">Categories</h2>
				<ul>
					<li><a class="btn left active" href="#">All <span class="arrow_right">&rsaquo;</span></a></li>
					<li><a class="btn left" href="#">Announcements <span class="arrow_right">&rsaquo;</span></a></li>
					<li><a class="btn left" href="#">Nutrition <span class="arrow_right">&rsaquo;</span></a></li>
					<li><a class="btn left" href="#">Athlete Profiles <span class="arrow_right">&rsaquo;</span></a></li>
					<li><a class="btn left" href="#">Mobility <span class="arrow_right">&rsaquo;</span></a></li>
					<li><a class="btn left" href="#">Video <span class="arrow_right">&rsaquo;</span></a></li>
					<li><a class="btn left" href="#">Uncategorized <span class="arrow_right">&rsaquo;</span></a></li>
				</ul>
			</div>
			
		</div>
		<!-- end #contentmain_right -->
		<div class="clear"></div>
	</div>
	<!-- end #contentmain -->

<? include('inc/footer.php'); ?>