<H3>List File</H3>

<?php

$array = scandir('.');

?>

<ul>
    <?php
    foreach($array as $itme){
        echo '<li>'. $itme.'<li>';
    }
    ?>
</ul>