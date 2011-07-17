<?php

function solution_21() {

	for( $i=2;$i<=10000;$i++ ) {
		
		$a = array_sum( get_proper_divisors( $i ) );
		$b = array_sum( get_proper_divisors( $a ) );
		
		if( $i == $b && $i !== $a ) {
			$s+= $i;
		}
	
	}
	return $s;
}

function answer_21() {
	return 31626;
}




