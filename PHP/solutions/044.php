<?php

function solution_44() {
	for( $i=1;$i<=5000;$i++ ) {
		$p[] = $i*(3*$i-1)/2;
	}

	for( $j=0;$j<5000;$j++ ) {
		for( $k=$j+1;$k<5000;$k++ ) {
			if ( in_array( $p[$j]+$p[$k], $p ) && in_array( $p[$k]-$p[$j], $p )) {
				return $p[$j] . ' ' . $p[$k];
			}
		}
	}

}

function answer_44() {
	return 5482660;
}




