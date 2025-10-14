<?php

get_header();

?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<section id="primary" class="site-main">
    <section class="banner">
        <video autoplay muted loop playsinline class="video-background">
            <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video-header.mp4" type="video/mp4">
        </video>
        <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"
            alt="logo Fleurs d'oranger & chats errants">
    </section>
    <!--L'histoire-->
    <section id="story" class="story">
        <h2><span class="story_title">L'histoire</span></h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article></section>
    <!--Les personnages section autre fichier-->
    <?php
    $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key' => '_main_char_field',
        'orderby' => 'meta_value_num',

    );
    $characters_query = new WP_Query($args);
    ?>
    <?php include get_stylesheet_directory() . '/section-characters.php'; ?>

    <div id="place">
        <div class="place_wrap_cloud">
            <img class="place_cloud" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/big_cloud.png"
                alt="grand nuage" />
            <img class="place_cloud little" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/little_cloud.png"
                alt="petit nuage" />
        </div>
        <div>
            <h3 class="title_place"><span class="story_title">Le</span> <span class="story_title word_two">lieu</span>
            </h3>
            <p><?php echo get_theme_mod('place'); ?></p>
        </div>
    </div>

    <section id="studio">
        <h2><span class="story_title">Studio</span> <span class="story_title word_two">Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>
    </section>
    <section class="wrap-oscars">
            <article class="row_oscars">
                <p class="story_title">Fleurs d’oranger & chats errants<br/> est nominé aux Oscars Short Film Animated de
                    2022 !
                </p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/oscars.png" alt="oscars" />
            </article>
    </section>
</main><!-- #main -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php
get_footer();

