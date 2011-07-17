<?php

function solution_28() {
	for( $i=3;$i<=1001;$i+=2 ) {
		$s+= 4*pow( $i, 2 )-6*$i+6;
	}
	return $s+1;
}

function answer_28() {
	return 669171001;
}