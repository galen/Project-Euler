<?php

function solution_33() {
	$fn = $fd = 1;
	for( $n=10;$n<100;$n++ ) {
		for( $d=$n+1;$d<100;$d++ ) {
			$n1 = str_split( $n );
			$d1 = str_split( $d );
			$nd = array_merge( $n1, $d1 );
			if ( $nd[1] == $nd[2] && $nd[3] != '0' && $nd[0]/$nd[3] == $n/$d ) {
				$fn *= $n;
				$fd *= $d;
			}

		}
	}
	$fnd = get_divisors( $fn );
	$fdd = get_divisors( $fd );
	return $fd / max( array_intersect( $fnd, $fdd ) );
}

function answer_33() {
	return 100;
}