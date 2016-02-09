<?php get_header(); ?>

		<section class="row">
			<div class="nine columns">
				<?php
					if ( have_posts() ) {
					    while ( have_posts() ) {
					        the_post(); ?>
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt();
					    } // end while
					} // end if
				?>
			</div>
			<div class="three columns">
				<h3>Sidebar</h3>
				<p>Sidebar</p>
			</div>
		</section>

<?php get_footer(); ?>
