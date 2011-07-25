<?php

class Permutations implements Iterator
{
    protected $c = null;
    protected $s = null;
    protected $n = 0;
    protected $pos = 0;

    function __construct($s) {
        if(is_array($s)) {
            $this->s = array_values($s);
            $this->n = count($this->s);
        } else {
            $this->s = (string) $s;
            $this->n = strlen($this->s);
        }
        $this->rewind();
    }
    function key() {
        return $this->pos;
    }
    function current() {
        $r = array();
        foreach($this->c as $k)
            $r[] = $this->s[$k];
        return is_array($this->s) ? $r : implode('', $r);
    }
    function next() {
        if($this->_next())
            $this->pos++;
        else
            $this->pos = -1;
    }
    function rewind() {
        $this->c = range(0, $this->n - 1);
        $this->pos = 0;
    }
    function valid() {
        return $this->pos >= 0;
    }
    //
    protected function _next() {
        $n = count($this->c);
        if($n == 1) return false;
        for($i = $n - 2; $this->c[$i] > $this->c[$i + 1]; $i--)
            if(!$i) return false;
        for($j = $n - 1; $this->c[$i] > $this->c[$j]; $j--);
        $q = $this->c[$j];
        $this->c[$j] = $this->c[$i];
        $this->c[$i] = $q;
        while(++$i < --$n) {
            $q = $this->c[$n];
            $this->c[$n] = $this->c[$i];
            $this->c[$i] = $q;
        }
        return true;
    }

    function all() {
		foreach(new self($this->s) as $k => $v) {
		    $a[] = $v;
		}
		return $a;
    }
}

function is_pandigital( $num, $max, $allow_zero = false ) {
	if ( !$allow_zero && strpos( $num, '0' ) !== false ) {
		return false;
	}
	return strlen( $num ) == $max && strlen( count_chars( $num, 3 ) ) == strlen( $num );
}

function is_prime( $number ) {
	if ( abs( $number ) * 1 <= 1 ) return false;
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

function get_proper_divisors( $n ) {
	for( $i=1;$i<=ceil($n/2);$i++ ) {
		if ( $n % $i == 0 ) {
			$d[] = $i;
		}
	}
	return $d;
}

function get_divisor_count( $n ) {
	for( $i=1;$i<ceil(sqrt($n));$i++ ) {
		if ( $n % $i == 0 ) {
			$c++;
		}
	}
	return $c*2;
}

function get_repeated_chars( $str ) {
	preg_match( '~(.+)?\1~', $str, $m );
	do {
		preg_match( '~(\d+)\1~', $m[1], $t );
		if ( count_chars( $t[1], 3 ) != count_chars( $m[1], 3 ) ) {
			break;
		}
		$m = $t;
	}while(1);
	return $m[1];
}