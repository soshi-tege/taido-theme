<section class="mission section" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/images/home/mission.jpg);">
    <div class="mission__inner inner">
        <div class="mission__content">
            <h2 class="mission__heading heading animation-viewport pop-up">
                Only you can Weave your Story
            </h2>
            <p class="mission__paragraph">
                The Japanese Anime industry with decades of history needs fresh, international talent.<br>
                We are working to connect overseas young talents with the industry for a more equitable, inclusive environment with open job opportunities and cultural interactions.
            </p>
            <?php get_template_part( 'components/button', null, array(
                'url' => home_url( '/mission/' ),
                'text' => 'Our Mission',
                'custom_css' => 'mission__button'
            )); ?>
        </div>
    </div>
</section>
