<?php get_header(); ?>

	<section class="row">

		<!-- BEGIN SIDEBAR -->
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
		<!-- END SIDEBAR -->

		<div class="eight columns">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();?>
					<h3><?php the_title(); ?></h3>
					<?php the_content();
				} // end while
			} // end if
			?>
		</div>

		<div class="two columns">
			&nbsp;
		</div>
	</section>

<?php get_footer(); ?>
