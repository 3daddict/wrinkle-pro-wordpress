<?php get_header(); ?>



<section class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1 p-0">

            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                <h1 id="firstH"><?php the_title(); ?></h1>
                <p id="firstP"><?php the_content(); ?></p>

            <?php endwhile; else : ?>
                <p><?php _e('Sorry, no pages found.') ?></p>
            <?php endif; ?>

        </div>
    </div>
</section>


<?php get_footer(); ?>

