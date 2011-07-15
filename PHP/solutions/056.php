<?php

function solution_56() {
	for( $a=1;$a<100;$a++ ) {
		for( $b=1;$b<100;$b++ ) {
			if ( ( $s = array_sum( str_split( bcpow( $a, $b ) ) ) ) > $h ) {
				$h = $s;
			}
		}
	}
	return $h;
}

function answer_56() {
	return 972;
}