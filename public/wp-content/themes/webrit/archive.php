<?php
/**
 * Страница архивов записей (archive.php)
 * @package WordPress
 * @subpackage wmagnet theme
 */
get_header(); ?>
<section>
	<?php if ( have_posts() ): while ( have_posts() ) : the_post();  ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<?php the_content();  ?>
	</article>
	<?php endwhile;
				else: echo '<p>Нет записей.</p>'; endif;  ?>

</section>
<?php get_footer(); ?>