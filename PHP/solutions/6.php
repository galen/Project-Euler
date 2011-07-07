<?php

function solution_6() {
	foreach( range( 1, 100 ) as $n1 ) {
		$sum1 += $n1*$n1;
	}
	
	foreach( range( 1, 100 ) as $n2 ) {
		$sum2 += $n2;
	}
	
	return $sum2*$sum2-$sum1;
}

function answer_6() {
	return 25164150;
}