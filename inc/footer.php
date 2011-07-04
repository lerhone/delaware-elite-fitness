	<footer>
		
		<div class="wrapper">
			
			<div id="poweredby">
				Powered by Wordpress
			</div>

			<div id="footer_links">
				<ul>
					<li><a href="" title="Home"<? if($nav_on=='home') { echo ' class="on"';} ?>>Home</a></li>
					<li><a href="" title="About"<? if($nav_on=='about') { echo ' class="on"';} ?>>About</a></li>
					<li><a href="" title="Staff"<? if($nav_on=='staff') { echo ' class="on"';} ?>>Staff</a></li>
					<li><a href="" title="Schedule"<? if($nav_on=='schedule') { echo ' class="on"';} ?>>Schedule</a></li>
					<li><a href="" title="News"<? if($nav_on=='news') { echo ' class="on"';} ?>>News</a></li>
					<li><a href="" title="Media"<? if($nav_on=='media') { echo ' class="on"';} ?>>Media</a></li>
					<li><a href="" title="Store"<? if($nav_on=='store') { echo ' class="on"';} ?>>Store</a></li>
					<li><a href="" title="Contact"<? if($nav_on=='contact') { echo ' class="on"';} ?>>Contact</a></li>
				</ul>
			</div><!--end footer_links-->

			<div id="copyright">
				Copywright &copy; <?= date('Y'); ?> Delaware Elite Fitness. All Right Reserved.
			</div><!--end copyright-->
			
		</div><!-- end wrapper -->
		
	</footer><!--end footer-->

</section><!--end wrapper-->

</body>
</html>


