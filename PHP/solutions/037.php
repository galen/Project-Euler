<?php

function solution_37() {
	for( $i=3797;;$i+=2 ) {
		$st = '';
		//echo $i;
		if ( str_replace( array( 0,2,4,5,6,8 ), '', $i ) == $i ) {
			continue;
		}
		$is = (string)$i;
		for( $j=0;$j<strlen($is);$j++ ) {
			for( $k=0;$k<=$j;$k++ ) {
				$st .= $is[$k];
			}
			if ( !is_prime( $st ) || !is_prime( substr( $is, $j ) ) ) {
				continue 2;
			}
			//echo substr( $is, $j ) . ' - ' . $st . "\n";
			$st='';
		}
						//echo $i;		
		//if ( !is_prime( $st ) || !is_prime( substr( $is, $j ) ) ) {
		
			//continue;
		echo sprintf( "%s\n", $i );
		//}
		$f[] = $i;
if ( count( $f ) == 11 ) {
	return array_sum( $f );
}

	}
}

function answer_37() {
	return 100;
}