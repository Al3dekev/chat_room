<?php

function myTimer($temps){
	$i;
	for($i = 0; $i <= $temps; $i += 1){ 
    echo $i;
	flush();
    sleep(1);
};
	
}
?>