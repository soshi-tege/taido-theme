<?php
    $url  = $args['url'];
    $text = $args['text'];
    $custom_css = $args['custom_css'];
?>
<a href="<?php echo esc_url( $url ); ?>"
    class="<?php echo esc_attr( $custom_css ); ?> button">
        <?php echo esc_html($text); ?>
</a>
