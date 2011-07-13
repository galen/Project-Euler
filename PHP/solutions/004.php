<?php

function solution_4() {
	foreach( range( 999, 100 ) as $n1 ) {
		foreach( range( 999,100 ) as $n2 ) {
			$s = $n1*$n2;
			if ( $s == strrev( $s ) && $s > $largest ) {
				$largest = $s;
			}
		}
	}
	return $largest;
}

function answer_4() {
	return 906609;
}