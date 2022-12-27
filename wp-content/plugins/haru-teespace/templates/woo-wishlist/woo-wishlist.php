<?php
/** 
 * @package    HaruTheme/Haru TeeSpace
 * @version    1.0.0
 * @author     Administrator <admin@harutheme.com>
 * @copyright  Copyright 2022, HaruTheme
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       http://harutheme.com
*/

?>
<div class="my-wishlist">
    <?php if ( class_exists( 'YITH_WCWL' ) ) : ?>
    <div class="my-wishlist-wrap"><?php echo haru_woocommerce_wishlist(); ?></div>
    <?php endif; ?>
</div>
