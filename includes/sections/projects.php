<section class="projects section">
    <div class="projects__inner inner">
        <div class="projects__content">
            <h2 class="projects__heading heading animation-viewport pop-up">
                Passion is All You Need 
            </h2>
            <p class="projects__paragraph">
                Have you ever thought of becoming an anime creator? <br>
                Do you have a story from your culture, life, or world of imagination you want the world to hear?
            </p>
            <p class="project__paragraph">
                It is not a talent, nationality, or knowledge that makes you an anime creator—when the unstoppable aspiration explodes in your heart, you become a creator no one can replace.
            </p>
            <p class="project__paragraph">
                Our partners collaborated with experienced Japanese animators and anime studios to deliver their traditions and history.<br>
                We strive to help those seeds of creativity sprout across the continent.
            </p>
            <?php get_template_part( 'components/button', null, array(
                'url' => home_url( '/projects/' ),
                'text' => 'Our Projects',
                'custom_css' => 'projects__button'
            )); ?>
        </div>
        <!-- デスクトップのみで表示（<768pxではdiv.projects__contentの背景として表示） -->
        <div class="projects__image-box fade-in animation-viewport">
            <picture>
                <source srcset="<?php echo esc_url( get_template_directory_uri() ) ?>/images/home/projects.webp" type="image/webp">
                <source srcset="<?php echo esc_url( get_template_directory_uri() ) ?>/images/home/projects.jpg" type="image/jpg">
                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/home/projects.jpg" alt="Image of our partners at the TAIDO animation award 2026.">
            </picture>
        </div>
    </div>
</section>