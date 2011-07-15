<?php

function solution_29() {
	for( $i=2;$i<=100;$i++ ) {
		for( $j=2;$j<=100;$j++ ) {
			$p[] = bcpow( $i, $j );		
		}
	}
	return count( array_unique( $p ) );
}

function answer_29() {
	return 4782;
}