<?php

function solution_25() {
	$n2 = 1;
	$i=1;
	do {
		$i++;
		$s = bcadd( $n1, $n2 );
		$n1 = $n2;
		$n2 = $s;
	}while ( strlen( $s ) < 1000 );
	return $i;
}

function answer_25() {
	return 4782;
}