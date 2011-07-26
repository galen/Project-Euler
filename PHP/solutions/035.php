<?php

function solution_35() {
	for ( $i=3;$i<1000000;$i+=2 ) {
		if ( strpos( $i, '5' ) ) {
			continue;
		}
		$r = get_rotations( $i );
		foreach( $r as $n ) {
			if ( !is_prime( $n ) ) {
				continue 2;
			}
		}
		$f[] = $i;
	}
	return count( $f )+1;
}

function answer_35() {
	return 55;
}