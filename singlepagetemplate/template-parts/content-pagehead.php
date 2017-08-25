<h2>
<?php

if (is_home()){
    echo 'Recent Posts';
} else {
    the_title();
}

?>
</h2>