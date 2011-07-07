<?php

function run_solution( $solution_number ) {
	require( 'solutions/' . $solution_number . '.php' );
	$start = microtime();
	$function = 'solution_'.$solution_number;
	echo sprintf( "%s. %s (%s)\n", $solution_number, $function(), microtime() - $start );
}

if ( file_exists( ( $solution = sprintf( 'solutions/%s.php', $argv[1] ) ) ) ) {
	$solution_number = $argv[1];
	run_solution( $solution_number );
	exit;
}

foreach( glob( 'solutions/*.php' ) as $solution ) {

	$solution_number = basename( $solution, '.php' );
	run_solution( $solution_number );

}