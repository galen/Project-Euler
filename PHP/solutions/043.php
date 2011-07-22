<?php

function solution_43() {
	foreach(new Permutations('0123456789') as $k => $v) {
		if (
			intval($v[1].$v[2].$v[3])%2 == 0 &&
			intval($v[2].$v[3].$v[4])%3 == 0 &&
			intval($v[3].$v[4].$v[5])%5 == 0 &&
			intval($v[4].$v[5].$v[6])%7 == 0 &&
			intval($v[5].$v[6].$v[7])%11 == 0 &&
			intval($v[6].$v[7].$v[8])%13 == 0 &&
			intval($v[7].$v[8].$v[9])%17 == 0
		) {
			$s += $v;
		}
    }
    return $s;
}

function answer_43() {
	return 16695334890;
}




