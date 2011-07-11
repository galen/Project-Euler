<?php

function solution_49() {
	$primes = get_primes( 1000, 9999 );
	foreach ( $primes as $p ) {
		foreach( range( 1, ceil( ( 9999-1000 )/2 ) ) as $n ) {
			if ( $p != 1487 && is_prime( $p+$n ) && is_prime( $p+$n*2 ) && is_permutation( array( $p, $p+$n, $p+$n*2 ) ) ) {
				return sprintf( '%s%s%s', $p, $p+$n, $p+$n*2 );
			}
		}
	}
}

function answer_49() {
	return 296962999629;
}




