<header class="masthead" style="background-image: url('<?php echo getEyecatchUrl(); ?>">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1><?php the_title(); ?>/h1>
          <p class="subheading">
            Posted by
            <a href="#!"><?php the+author(); ?></a>
            on <?php the_time('Y年n月j日 g:i a'); ?>
          </p>
          <span class="subheading"><?php bloginfo('description'); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>