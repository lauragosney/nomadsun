
<a href="<?php the_permalink(); ?>">


<div class="height cover bg-center flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
  <?php endif; ?>">

  <div class=" hero-content white tc">
    <!-- location title -->
    <h1 class="archivo f5 pa3 ttu"><?php the_title(); ?></h1>

  </div>
</div>
</a>
