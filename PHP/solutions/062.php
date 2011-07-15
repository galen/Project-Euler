<?php

function solution_62() {
	for( $a=345;$a<9999;$a++ ) {
		$temp = str_split( $b = bcpow( $a, 3 ) );
		sort( $temp );
		$cube[$b] = implode( '', $temp );		
		$cubes[] = implode( '', $temp );
	}
	$t = array_count_values($cubes);
	asort($t);
	$tt = array_flip( $t );
	return array_search( $tt[5], $cube );
}

function answer_62() {
	return 127035954683;
}