<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>
<footer>
	<div class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="ASLAN（アスラン）"></div>
	<h2 class="description">埼玉県飯能市のヘアサロン　ASLAN（アスラン）</h2>
	<p class="copyright en">Copyright ASLAN All Rights Reserved.</p>
</footer>
<div id="page-top">TOP</div>
<nav id="navi">
	<div id="menuClose">
		<div class="menu-trigger">
			<span></span><span></span><span></span>
		</div>
	</div>
		<?php wp_nav_menu( array(
			'theme_location'=>'footermenu', 
			'container'     =>'', 
			'menu_class'    => 'link'));
		?>
	<ul class="navi-icon-sns">
		<li class="insta-icon">
			<a href="https://www.instagram.com/hair.aslan/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</li>
	</ul>
</nav>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lib/jquery.easing.js"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/aslan.js"></script>
  <?php if ( is_front_page() || is_home() ) : ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/instagram.js"></script>
  <?php elseif ( is_page( '2') ) : ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lib/jquery.fs.boxer.min.css"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr05iWT58aJZ-hRD3Au_wzdtiy-ksZP6M"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lib/jquery.fs.boxer.min.js"></script>
<script type="text/javascript">
	$(".boxer").boxer({
		mobile: false, // 全画面表示
		fixed: true
	});
</script>
<script>
jQuery(function(){
  var latlng = new google.maps.LatLng(35.853222, 139.328694);
  var myOptions = {
    zoom: 17,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false
  };
  var map = new google.maps.Map(document.getElementById('map'), myOptions);
   
  var marker = new google.maps.Marker({
    position: latlng,
    map: map,
  });
});
</script>
  <?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>