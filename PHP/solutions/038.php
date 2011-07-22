<?php

function solution_38() {
	for( $i=1; $i<9876; $i++ ) {
		$s='';
		for( $j=1; $j<9; $j++ ) {
			if ( strlen( $s . $i*$j ) > 9 ) {
				break;
			}
			$s .= $i*$j;
		}
		if ( is_pandigital( $s, 9 ) ) {
			$largest = $s;
		}
	}
	return $largest;
}

function answer_38() {
	return 932718654;
}