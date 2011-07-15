<?php

function solution_27() {
	for( $a=-999;$a<1000;$a++ ) {
		for( $b=-999;$b<1000;$b++ ) {
			for( $n=0;;$n++ ) {
				if ( is_prime( $n*$n + $a*$n + $b ) ) {
					$p++;
				}
				else {
					if ( $p > $most ) {
						$product = $a*$b;
						$most = $p;
					}
					$p = 0;
					continue(2);
				}
			}
		}
	}
	return $product;
}

function answer_27() {
	return -59231;
}