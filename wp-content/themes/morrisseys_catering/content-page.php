<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package morrisseys_catering
 */
?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>---->
<!--	<header class="entry-header">---->
	<!--	<h1 class="entry-title"><?php the_title(); ?></h1> ---->
<!--	</header><!-- .entry-header ---->

		<?php the_content(); ?>
<!--		<?php
			wp_link_pages( array(
				'before' => ' <!--<div class="page-links">' . __( 'Pages:', 'morrisseys_catering' ),
				'after'  => '</div>---->',
			) );
		?> 
<!--	<?php edit_post_link( __( 'Edit', 'morrisseys_catering' ), '<footer class="entry-meta"> <!-- <span class="edit-link"> ----->', '</span></footer>' ); ?>---->
