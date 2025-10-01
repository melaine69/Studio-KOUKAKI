<?php if ( isset($characters_query) && $characters_query->have_posts() ) : ?>
<section id="characters">
   <div class="characters-header">
  <h3>
    <span class="story_title">Les</span>
    <span class="story_title word_two">personnages</span>
  </h3>
</div>
  <div class="characters-carousel swiper">
    <div class="swiper-wrapper">
    <?php
    while ( $characters_query->have_posts() ) {
      $characters_query->the_post();
      ?>
      <div class="swiper-slide">
        <figure>
          <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('full');
            }
          ?>
          <figcaption><?php the_title(); ?></figcaption>
        </figure>
      </div>
    <?php } ?>
  </div>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
