<?php

function solution_5() {
	$d = array(3,6,7,8,9,11,12,13,14,15,16,17,18,19);
	for( $i=20;;$i+=20 ) {
	
		foreach( $d as $n ) {
			if ( $i % $n != 0 ) {
				$f = true;
				continue(2);
			}
		}
		return $i;
		exit;
	}
}

function answer_5() {
	return 232792560;
}