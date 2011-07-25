<?php

function solution_26() {
	return array_search(
		max(
			$f = array_map(
				function($n){
					return strlen( get_repeated_chars( bcdiv( 1, $n, 10000 ) ) );
				},
				range(1,1000)
	 		)
	 	), $f
	 ) + 1;
}

function answer_26() {
	return 983;
}