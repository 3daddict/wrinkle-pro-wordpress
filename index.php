<?php get_header(); ?>



<main role="main">
    <section class="row">
        <div class="col-10 offset-1">

            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.') ?></p>
            <?php endif; ?>

        </div>
    </section>
</main>


<?php get_footer(); ?>

<!-- <section class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-6">Wrinkle Pro</h1>
        <div class="container">
            <div class='embed-responsive embed-responsive-16by9'>
                <iframe class="embed-responsive-item" src='https://www.youtube.com/embed/GOElqG3qTAE?controls=0' frameborder='0' allowfullscreen></iframe>
            </div>
    </div>
    </section> -->