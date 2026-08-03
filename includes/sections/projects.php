<section class="projects section">
    <div class="projects__inner inner">
        <div class="projects__content">
            <h2 class="projects__heading heading animate pop-up">
                Passion is All You Need 
            </h2>
            <p class="projects__paragraph">
                Our partners collaborated with experienced Japanese animators and anime studios to produce high-quality anime, delivering their traditions and history. They began their career as pioneers of African anime in Nigeria and Ghana. 
            </p>
            <!-- button-textの中身が実際は表示（aタグの中身は読み上げ用） -->
            <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="projects__button button">
                <span class="button__text" button-text="Our Projects">
                    Our Projects
                </span>
            </a>
        </div>
        <!-- デスクトップのみで表示（<768pxではdiv.projects__contentの背景として表示） -->
        <div class="projects__image-box fade-in animate desktop">
            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/home/projects.jpg" alt="Image of one of our partners at the TAIDO animation award 2026.">
        </div>
    </div>
</section>