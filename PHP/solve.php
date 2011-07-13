<?php

require( 'lib.php' );

function run_solution( $solution_number ) {
	require( 'solutions/' . $solution_number . '.php' );
	$start = microtime( true );
	$function = 'solution_'.(int)$solution_number;
	echo sprintf( "Solving problem %s: ", (int)$solution_number );
	echo sprintf( "%s (%ss)\n", $function(), $time = round( microtime( true ) - $start, 6 ) );
	return $times[$solution_number] = $time;
}

if ( file_exists( ( $solution = sprintf( 'solutions/%s.php', ( $solution_number = str_pad( (int)$argv[1], 3, '0', STR_PAD_LEFT ) ) ) ) ) ) {
	run_solution( $solution_number );
	exit;
}

$files = glob( 'solutions/*.php' );

foreach( $files as $solution ) {
	$solution_number = basename( $solution, '.php' );
	$times[] = run_solution( $solution_number );
}

echo sprintf( "%s problems solved in %s seconds\nAverage time %s seconds\n", count( $times ), array_sum( $times ), round( array_sum( $times )/count( $times ), 6 ) );