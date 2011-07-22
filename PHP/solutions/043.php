<?php

function solution_43() {
	$primes = get_primes( 2,17 );
	foreach(new Permutations('0123456789') as $v) {
		foreach( $primes as $n => $p ) {
			if ( intval( $v[$n+1].$v[$n+2].$v[$n+3] )%$p > 0 ) {
				continue 2;
			}
		}
		$s += $v;
	}
	return $s;
}

function answer_43() {
	return 16695334890;
}




