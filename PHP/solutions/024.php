<?php

function solution_24() {
	foreach(new Permutations('0123456789') as $n => $v) {
		if ( $n == 999999 ) {
			return $v;
		}
	}
}

function answer_24() {
	return 2783915460;
}




