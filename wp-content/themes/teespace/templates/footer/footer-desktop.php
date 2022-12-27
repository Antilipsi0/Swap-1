<?php
/**
 * @package    HaruTheme
 * @version    1.0.0
 * @author     Administrator <admin@harutheme.com>
 * @copyright  Copyright 2022, HaruTheme
*/

?>
<footer id="haru-footer">
    <?php
        $footer_id = apply_filters( 'haru_get_footer_layout', haru_get_footer_layout() );
        haru_render_footer_layout( $footer_id );
    ?>
</footer>
