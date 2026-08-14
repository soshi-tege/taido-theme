<?php
$videos = [
    array(
        'url' => 'https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4',
        'caption_file' => 'https://fake.vtt',
        'name' => 'Name@Organization',
    ),
    array(
        'url' => 'https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4',
        'caption_file' => 'https://fake.vtt',
        'name' => 'Name@Organization',
    ),
    array(
        'url' => 'https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4',
        'caption_file' => 'https://fake.vtt',
        'name' => 'Name@Organization',
    ),
    array(
        'url' => 'https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4',
        'caption_file' => 'https://fake.vtt',
        'name' => 'Name@Organization',
    ),
    array(
        'url' => 'https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4',
        'caption_file' => 'https://fake.vtt',
        'name' => 'Name@Organization',
    ),
    array(
        'url' => 'https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4',
        'caption_file' => 'https://fake.vtt',
        'name' => 'Name@Organization',
    ),
];
?>
<?php if ($videos): ?>
<section class="message section">
    <div class="message__inner inner">
        <h2 class="message__heading heading animation-viewport pop-up">
            Meet the Community of African Anime Pioneers
        </h2>
        <div>
            <ul class="message__items js-scrollable" aria-label="Partner message videos">
                <?php foreach ($videos as $video): ?>
                <li class="message__item">
                    <video aria-label="Message from <?php esc_attr( $video['name'] ); ?>" controls muted disablepictureinpicture playsinline loop class="message__video">
                        <source src="<?php echo esc_url( $video['url'] ); ?>">
                        <track
                            kind="captions"
                            src="<?php echo esc_url( $video['caption_file'] ); ?>"
                            srclang="en"
                            label="English"
                            default
                        >
                    </video>
                    <p class="message__person">
                        <span class="message__name">
                            <?php echo esc_html( $video['name'] ); ?>
                        </span>
                    </p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<?php endif; ?>