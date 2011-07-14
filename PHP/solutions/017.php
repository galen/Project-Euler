<?php

function convert( $n ) {
	$n = (int)$n;
	$data = array(
		1	=> 'one',
		2	=> 'two',
		3	=> 'three',
		4	=> 'four',
		5	=> 'five',
		6	=> 'six',
		7	=> 'seven',
		8	=> 'eight',
		9	=> 'nine',
		10	=> 'ten',
		11	=> 'eleven',
		12	=> 'twelve',
		13	=> 'thirteen',
		14	=> 'fourteen',
		15	=> 'fifteen',
		16	=> 'sixteen',
		17	=> 'seventeen',
		18	=> 'eighteen',
		19	=> 'nineteen',
		20	=> 'twenty',
		30	=> 'thirty',
		40	=> 'forty',
		50	=> 'fifty',
		60	=> 'sixty',
		70	=> 'seventy',
		80	=> 'eighty',
		90	=> 'ninety',
		100	=> 'hundred'
	);
	
	switch( strlen( $n ) ) {
		case 1:
			$length .= $data[$n];
			break;
		case 2:
			if ( $n <= 20 ) {
				$length .= $data[$n];
				break;
			}
			$parts = str_split( $n );
			$length .= $data[$parts[0]*10] . $data[$parts[1]];
			break;
		case 3:
			$parts = str_split( $n );
			$length .= $data[$parts[0]] . 'hundred' . ( $parts[1]+$parts[2] ? 'and' : '' ) . convert( $parts[1] . $parts[2] );
			break;
		case 4:
			$length .= 'onethousand';
			break;
	}
	return $length;

}


function solution_17() {
	for( $i=1;$i<=1000;$i++ ) {
		$sum += strlen( convert( $i ) );
	}
	return $sum;
}

function answer_17() {
	return 21124;
}




