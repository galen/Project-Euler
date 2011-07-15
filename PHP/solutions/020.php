<?php

function solution_20() {
	return array_sum( str_split( array_reduce( range( 100, 1 ), function($p, $n){ return bcmul( $p, $n ); }, 1 ) ) );
}

function answer_20() {
	return 648;
}




