<?php

function solution_22() {
	$data = str_getcsv( file_get_contents( 'data/022.php' ) );
	sort( $data );
	foreach( $data as $k => $n ) {
		$t += ($k+1) * array_reduce( str_split( $n ), function( $s, $p ){ return $s+ord($p)-64; } );
	}
	return $t;
}

function answer_22() {
	return 871198282;
}




