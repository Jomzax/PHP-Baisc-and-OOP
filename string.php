<?php
    $name = 'jo';
?>
<h3>String Functions</h3>
<div>Count : <?php echo strlen($name);?></div>
<div>Indxof : <?php echo strpos($name,'o');?></div>
<div>Upprecase : <?php echo strtoupper($name);?></div>
<div>lowercase : <?php echo strtolower($name);?> </div>
<div>Replace : <?php echo str_replace('jo','joan',$name); ?></div>
<div>Substring : <?php echo substr($name,0,1); ?></div>