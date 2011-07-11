<?php

require( 'lib.php' );

function run_solution( $solution_number ) {
	require( 'solutions/' . $solution_number . '.php' );
	$start = microtime( true );
	$function = 'solution_'.$solution_number;
	echo sprintf( "Solving problem %s: ", $solution_number );
	echo sprintf( "%s (%ss)\n", $function(), $time = round( microtime( true ) - $start, 6 ) );
	return $times[$solution_number] = $time;
}

if ( file_exists( ( $solution = sprintf( 'solutions/%s.php', $argv[1] ) ) ) ) {
	$solution_number = $argv[1];
	run_solution( $solution_number );
	exit;
}

$files = glob( 'solutions/*.php' );

foreach( $files as $solution ) {
	$solution_number = basename( $solution, '.php' );
	$times[] = run_solution( $solution_number );
}

echo sprintf( "%s problems solved in %s seconds\nAverage time %s seconds\n", count( $times ), array_sum( $times ), round( array_sum( $times )/count( $times ), 6 ) );