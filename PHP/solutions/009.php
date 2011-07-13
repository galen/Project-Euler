<?php

function solution_9() {

	for( $i=1;$i<333; $i++ ) {
		for( $j=$i+1; $i+$j+$j+1 < 1001; $j++ ) {
			for( $k=$j+1; $i+$j+$k < 1001; $k++ ) {
				if ( $i+$j+$k==1000 && pow( $i, 2 ) + pow( $j, 2 ) == pow( $k, 2 ) ) {
					return $i*$j*$k;
				}
			}
		}

	}
	
}

function answer_9() {
	return 31875000;
}