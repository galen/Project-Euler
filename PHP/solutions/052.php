<?php

function solution_52() {
	for( $i=1;;$i++ ){
		if ( is_permutation( array( $i, $i*2, $i*3, $i*4, $i*5, $i*6 ) ) ) {
			return $i;
		}
	}
}

function answer_52() {
	return 142857;
}




