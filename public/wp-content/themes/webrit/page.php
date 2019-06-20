<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage wmagnet theme
 */
get_header();?>
<section>
<?php while ( have_posts() ) : the_post();  ?>

	<h1><?php the_title(); ?></h1>
	<?php the_content();  ?>
	
<?php endwhile; ?>	 
</section>
<?php get_footer();  ?>