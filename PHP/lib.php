<?php

function is_prime( $number ) {
	if ( $number == 1 ) return false;
	for ( $i=2 ; $i<=sqrt( $number ) ; $i++ ) {
		if ( $number % $i == 0 ) {
			return false;
		}
	}
	return true;
}

function get_primes( $start, $end ) {
	foreach( range( $start, $end ) as $n ) {
		if ( is_prime( $n ) ) {
			$primes[] = $n;
		}
	}
	return $primes;
}

function is_permutation( $array ) {

	$tmp = array();
	foreach( $array as $t ) {
		$tt = str_split( $t );
		sort($tt);
		$tmp[] = implode( '', $tt );
	}

	if ( count( array_unique( $tmp ) ) == 1 ) {
		return true;
	}
	return false;

}

function get_divisor_count( $n ) {
	for( $i=1;$i<ceil(sqrt($n));$i++ ) {
		if ( $n % $i == 0 ) {
			$c++;
		}
	}
	return $c*2;
}