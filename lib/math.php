<?php

function addRandomNumbers()
{
	$num1 = rand(1, 100);
	$num2 = rand(1, 100);
	$sum = $num1 + $num2;

	return [
		'num1' => $num1,
		'num2' => $num2,
		'sum' => $sum,
	];
}