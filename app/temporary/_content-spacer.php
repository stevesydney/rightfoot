<?php

	$class = 'type-' . rand(1,4) . ' square';
    

	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
	$colour_1 = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

?>

<div class="content-spacer <?= $class; ?>" style="background-color: <?= $colour_1 ?>;">
	
	
</div>