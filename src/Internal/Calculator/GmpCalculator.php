<?php

namespace Brick\Math\Internal\Calculator;

use Brick\Math\Internal\Calculator;

/**
 * Calculator implementation built around the GMP library.
 *
 * @internal
 */
class GmpCalculator extends Calculator
{
	/**
	 * {@inheritdoc}
	 */
	public function add($a, $b)
	{
		return gmp_strval(gmp_add($a, $b));
	}

	/**
	 * {@inheritdoc}
	 */
	public function sub($a, $b)
	{
		return gmp_strval(gmp_sub($a, $b));
	}

	/**
	 * {@inheritdoc}
	 */
	public function mul($a, $b)
	{
		return gmp_strval(gmp_mul($a, $b));
	}

	/**
	 * {@inheritdoc}
	 */
	public function divQ($a, $b)
	{
		return gmp_strval(gmp_div_q($a, $b));
	}

	/**
	 * {@inheritdoc}
	 */
	public function divR($a, $b)
	{
		return gmp_strval(gmp_div_r($a, $b));
	}

	/**
	 * {@inheritdoc}
	 */
	public function divQR($a, $b)
	{
		list ($q, $r) = gmp_div_qr($a, $b);

		return [
			gmp_strval($q),
			gmp_strval($r)
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function pow($a, $e)
	{
		return gmp_strval(gmp_pow($a, $e));
	}

	/**
	 * {@inheritdoc}
	 */
	public function gcd($a, $b)
	{
		return gmp_strval(gmp_gcd($a, $b));
	}

	public function fromBase(string $number, int $base): string
	{
		return gmp_strval(gmp_init($number, $base));
	}

	public function toBase(string $number, int $base) : string
	{
		return gmp_strval($number, $base);
	}

	public function and(string $a, string $b) : string
	{
		return gmp_strval(gmp_and($a, $b));
	}

	public function or(string $a, string $b) : string
	{
		return gmp_strval(gmp_or($a, $b));
	}

	public function xor(string $a, string $b) : string
	{
		return gmp_strval(gmp_xor($a, $b));
	}

	public function sqrt(string $n) : string
	{
		return gmp_strval(gmp_sqrt($n));
	}
}
