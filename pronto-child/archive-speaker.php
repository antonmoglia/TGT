<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>

	<?php if ( ! is_front_page() && ! is_home() ) : ?>
		<div id="primary" class="content-area clr boxed">
			<div id="content" class="site-content" role="main">
		<header class="page-header archive-header">
			<h1 class="page-header-title archive-title">Speakers</h1>
			<?php if ( $description = term_description() ) : ?>
				<div class="archive-meta"><?php echo wp_kses_post( $description ); ?></div>
			<?php endif; ?>
		</header><!-- .archive-header -->
	<?php endif; ?>
<h4>Key Speakers</h4>
<?php $custom_terms = get_terms('type');



    $args = array('tax_query' => array(
            array(
                'taxonomy' => 'type',
									'terms' => '5'
            ),
        ),
     );

     $loop = new WP_Query($args);
     if($loop->have_posts()) {


        while($loop->have_posts()) : $loop->the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;
     }

?>
	</div><!-- #content -->

		</div><!-- #primary -->

		<div id="primary" class="content-area clr boxed">
			<div id="content" class="site-content" role="main">
<h4>Tables rondes</h4>
<?php $custom_terms = get_terms('type');



    $args2 = array('tax_query' => array(
            array(
                'taxonomy' => 'type',
									'terms' => '6'
            ),
        ),
     );

     $loop = new WP_Query($args2);
     if($loop->have_posts()) {


        while($loop->have_posts()) : $loop->the_post();
            get_template_part( 'content2', get_post_format() );
        endwhile;
     }

?>


</div><!-- #content -->

	</div><!-- #primary -->


<?php get_footer(); ?>
