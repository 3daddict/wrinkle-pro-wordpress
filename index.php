<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    

<?php endwhile; else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.') ?></p>
<?php endif; ?>

<?php get_footer(); ?>

<!-- <section class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <div class="jumbotron jumbotron-fluid p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe
            class="embed-responsive-item"
            src="https://www.youtube.com/embed/GOElqG3qTAE?controls=0"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section class="container-fluid">
  <div class="row">
      <div class="col-10 offset-1 mt-4 mb-4">
        <h1>Introducing the Wrinkle Pro</h1>
        <p>It wraps around your ear, and separates the front part of your face from smashing into the pillow protecting delicate skin under your eyes from experiencing hours of damaging stress, and pressure, that causes deeper wrinkles, and crevices. The sooner you start using the wrinkle stopping face cloud along with your favorite wrinkle diminishing cream, the sooner you'll have wonderful nights of healing sleep, and our project hopes, that through you, a bigger healing will take place.</p>
      </div>
    </div>
</div>
</section> -->

