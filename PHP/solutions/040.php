<?php

function solution_40() {
	
	for( $i=1;$l<1000001;$i++ ) {
		$str .= $i;
		$l += strlen($i);
	}
	return $str[0]*$str[9]*$str[99]*$str[999]*$str[9999]*$str[99999]*$str[999999];
}

function answer_40() {
	return 162;
}




