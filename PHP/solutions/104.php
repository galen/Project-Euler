<?php

function solution_104() {
	$n2 = 1;
	do {
		$c++;
		if ( is_pandigital( substr( $n2, strlen( $n2 )-9 ), 9 ) && is_pandigital( substr( $n2, 0, 9 ), 9 ) ) {
			return $c;
		}
		$s = bcadd( $n1, $n2 );
		$n1 = $n2;
		$n2 = $s;
	}while ( 1 );
	return array_sum( $e );
}

function answer_104() {
	return 329468;
}