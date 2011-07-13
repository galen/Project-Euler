<?php

function solution_12() {
	for( $i=1;;$i++ ) {
		$t += $i;
		if ( get_divisor_count( $t, true ) > 500 ) {
			return $t;
		}
	}
}

function answer_12() {
	return 76576500;
}