<?php

function solution_01() {
	return array_sum( array_unique( array_merge( range( 0, 999, 3 ), range( 0, 999, 5 ) ) ) );
}