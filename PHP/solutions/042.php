<?php

function solution_42() {
	$data = str_getcsv( file_get_contents( 'data/042.php' ) );
	foreach( $data as $name ) {
		foreach( str_split( $name ) as $letter ) {
			$s += ord( $letter ) - 64;
		}
		if ( strpos( sqrt( 8 * $s + 1 ), '.' ) === false ) {
			$t++;
		}
		$s=0;
	}
	return $t;
}

function answer_42() {
	return 162;
}




