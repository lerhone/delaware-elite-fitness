	<footer>
		
		<div class="wrapper">
			
			<div id="footer_left" class="left">
				<div id="powered_by">
					Powered by <a href="http://wordpress.org">Wordpress</a>
				</div>
			</div>

			<div id="footer_right" class="right">
				<ul>
					<li><a href="/" title="Home"<? if($nav_on=='home') { echo ' class="on"';} ?>>Home</a></li>
					<li><a href="/about.php" title="About"<? if($nav_on=='about') { echo ' class="on"';} ?>>About</a></li>
					<li><a href="/staff.php" title="Staff"<? if($nav_on=='staff') { echo ' class="on"';} ?>>Staff</a></li>
					<li><a href="" title="Schedule"<? if($nav_on=='schedule') { echo ' class="on"';} ?>>Schedule</a></li>
					<li><a href="/news.php" title="News"<? if($nav_on=='news') { echo ' class="on"';} ?>>News</a></li>
					<li><a href="/media.php" title="Media"<? if($nav_on=='media') { echo ' class="on"';} ?>>Media</a></li>
					<li><a href="" title="Store"<? if($nav_on=='store') { echo ' class="on"';} ?>>Store</a></li>
					<li><a href="/contact.php" title="Contact"<? if($nav_on=='contact') { echo ' class="on"';} ?>>Contact</a></li>
				</ul>
			
				<div id="copyright">
					Copyright &copy; <?= date('Y'); ?> Delaware Elite Fitness. All Right Reserved.
				</div><!--end copyright-->	
				
			</div><!--end footer_links-->

			
			
		</div><!-- end wrapper -->
		
	</footer><!--end footer-->

</section><!--end wrapper-->

</body>
</html>


