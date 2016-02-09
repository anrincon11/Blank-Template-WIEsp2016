<?php get_header(); ?>

    <div class="row">
        <div class="three columns">
			<h2>Sidebar</h2>
		</div>
		<div class="nine columns">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>

        </div>
    </div>

<?php get_footer(); ?>