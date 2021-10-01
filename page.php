<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordWiki
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<h1 class="entry-title"><?php the_title() ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
	</main>
</div>

<?php
get_footer();
