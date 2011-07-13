<?php

function solution_3() {
	foreach( range( ceil( sqrt( 600851475143 ) ), 3 ) as $number ) {
		if ( 600851475143 % $number == 0 && is_prime( $number ) ) {
			return $number;
		}
	}
}

function answer_3() {
	return 6857;
}