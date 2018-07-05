
<!-- <h1>
  <a href="<?php the_permalink(); ?>">
    Check out <?php the_title(); ?>
  </a>

</h1> -->

<section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
  <?php endif; ?>">

  <div class="hero-content white tc">
    <!-- location title -->
    <h1 class="archivo hero-heading b ttu ma0 mb3"><?php the_title(); ?></h1>

    <!-- location subheading -->
    <?php if( get_field('subhead') ): ?>
      <p class="tenor hero-subhead mb6 mt0 white ttu"><?php the_field('subhead'); ?></p>
    <?php endif; ?>

    <!-- formatted date-->
    <?php if( get_field('date') ): ?>

      <p class="archivo f6 ma0 white ttu tracked">
        <?php
        // here we convert our date intp format that php can
        // worth with, and then we can format it to be nice and readable
        echo date("F Y", strtotime(get_field('date')));
        ?>
      </p>

    <?php endif; ?>

  </div>
</section>
