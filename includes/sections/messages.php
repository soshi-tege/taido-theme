<?php
$query = new WP_Query(array(
    'post_type'      => 'messages',
    'post_status'    => 'publish',
    // 全ての投稿を取得する
    'posts_per_page' => -1,
));
?>
<?php
if ( $query->have_posts() ) :
?>
<section class="message section">
    <div class="message__inner inner">
        <h2 class="message__heading heading animation-viewport pop-up">
            Meet the Community of African Anime Pioneers
        </h2>
        <div>
            <ul class="message__items js-scrollable" aria-label="Partner message videos">
                <?php 
                while ( $query->have_posts() ):
                    $query->the_post();
                ?>
                <li class="message__item">
                    <?php the_content(); ?>
                    <p class="message__person">
                        <span class="message__name">
                            <?php the_title(); ?>
                        </span>
                    </p>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<?php wp_reset_query(); ?>
<?php endif; ?>