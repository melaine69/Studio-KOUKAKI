<?php if ( isset($characters_query) && $characters_query->have_posts() ) : ?>
<section id="characters" class="characters-carousel swiper">
  <h3>
    <span class="story_title">Les</span>
    <span class="story_title word_two">personnages</span>
  </h3>

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

  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
