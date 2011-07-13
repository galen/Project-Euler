<?php

function solution_7() {
	$primes = 3;
	for ( $i=7;;$i++ ) {
		if ( is_prime( $i ) ) {
			$primes++;
			if ( $primes == 10001 ) {
				return $i;
				exit;
			}
		}
	}
}

function answer_7() {
	return 104743;
}