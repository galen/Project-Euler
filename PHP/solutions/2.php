<?php

function solution_2() {
	$n2 = 1;
	do {
		$s = $n1 + $n2;
		if ( $s % 2 == 0 ) {
			$e[] = $s;
		}
		$n1 = $n2;
		$n2 = $s;
	}while ( $s < 4000000 );
	return array_sum( $e );
}

function answer_2() {
	return 4613732;
}