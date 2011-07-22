<?php

function solution_3() {
	for ( $i=ceil( sqrt( 600851475143 ) ); $i > 2; $i-- ) {
		if ( 600851475143 % $i == 0 && is_prime( $i ) ) {
			return $i;
		}
	}
}

function answer_3() {
	return 6857;
}