<?php

function solution_10() {
	$sum = 10;
	for ( $i=7;$i<2000000;$i++ ) {
		if ( is_prime( $i ) ) {
			$sum += $i;
		}
	}
	return $sum;
}

function answer_10() {
	return 142913828922;
}