<?php
if(get_post_type() == ""){

    include(locate_template('template/single/.php'));

}
elseif(get_post_type() == "post"){

    include(locate_template('template/single/post.php'));

}