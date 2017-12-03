<?php
/**
 * The Template for displaying all single posts.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( ! post_password_required() ) : ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endif; ?>

	<div id="primary" class="content-area clr">

		<div id="content" class="site-content boxed" role="main">

			<header class="post-header">

				<h1 class="post-header-title"><?php the_title(); ?></h1>

				<ul class="meta single-meta clr">
			<?php the_excerpt(); ?>
				</ul>
			</header>

			<article class="entry clr"><?php the_content(); ?></article>

			<?php wp_link_pages( array(
				'before'      => '<div class="page-links clr">',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
			) ); ?>

			<?php if ( get_theme_mod( 'wpex_blog_tags', true ) ) : ?>
				<?php the_tags( '<div class="post-tags clr">','','</div>' ); ?>
			<?php endif; ?>

			<?php comments_template(); ?>

		</div>

		<nav class="single-nav clr">
			<?php next_post_link( '<div class="single-nav-left col span_12 clr-margin">%link</div>', '&larr; %title', false ); ?>
			<?php previous_post_link( '<div class="single-nav-right col span_12">%link</div>', '%title &rarr;', false ); ?>
		</nav>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
