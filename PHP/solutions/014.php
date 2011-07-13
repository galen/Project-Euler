<?php

function solution_14() {
	for( $i=1; $i<1000000; $i++ ) {
		$c = $i;
		while ( $c > 1 ) {
			if ( $c % 2 ) {
				$c = $c*3+1;
			}
			else {
				$c = $c/2;
			}
			$l++;
		}
		if ( $l > $longest ) {
			$longest = $l;
			$longest_i = $i;
		}
		$l=0;
	}
	return $longest_i;
}

function answer_14() {
	return 837799;
}




