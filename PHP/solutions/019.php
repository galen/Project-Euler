<?php

function solution_19() {
	date_default_timezone_set( 'America/Los_Angeles' );
	$dt = strtotime( 'jan 1, 1901' );
	do {
		$dt = strtotime( 'next sunday', $dt );
		if ( date( 'j', $dt ) == 1 ) {
			$t++;
		}
	}while( date( 'Y', $dt ) < 2001 );
	return $t;
}

function answer_19() {
	return 171;
}




