<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage wmagent theme
 */
?>
<footer>
	<?php $args = array( 
				'theme_location' => 'main', 
				'container'=> false, 
				'menu_class' => 'nav',
				'menu_id' => 'nav',
				'fallback_cb' => false
				);
				wp_nav_menu($args); 
	?>
</footer>
<?php wp_footer();  ?>
</body>

</html>