<?php

function solution_1() {
	return array_sum( array_unique( array_merge( range( 0, 999, 3 ), range( 0, 999, 5 ) ) ) );
}

function answer_1() {
	return 233168;
}