<?php

function solution_63() {
	for( $a=1;$a<=10;$a++ ) {
		for( $b=1;$b<=100;$b++ ) {
			if ( strlen( bcpow( $a, $b ) ) == $b ) {
				$c++;
			}
		}
	}
	return $c;
}

function answer_63() {
	return 49;
}