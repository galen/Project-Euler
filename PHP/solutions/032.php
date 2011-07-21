<?php

function solution_32() {
	for( $i=2; $i<9876; $i++ ) {
		for( $j=$i+1; $j<9876; $j++ ) {
			$str = $i . $j . ( $i*$j );
			if ( strlen( $str ) > 9 ) {
				break;
			}
			if ( is_pandigital( $str, 9 ) ) {
				$f[$i*$j]= $i*$j;
			}
		}
	}
	return array_sum($f);
}

function answer_32() {
	return 45228;
}