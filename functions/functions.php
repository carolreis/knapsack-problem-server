<?php
function random() {
	return mt_rand() / mt_getrandmax();
}

function frand($min, $max, $decimals = 2) {
  $scale = pow(10, $decimals);
  return mt_rand($min * $scale, $max * $scale) / $scale;
}

	
function quick_sort($arr) {
	$length = count($arr);
	if ($length <= 1) {
		return $arr;
	} else {
		$pivot = $arr[0];
		$left = $right = array();
		for ($i = 1; $i < count($arr); $i++) {
			if ($arr[$i] > $pivot) {
				$left[] = $arr[$i];
			} else{
				$right[] = $arr[$i];
			}
		}
		return array_merge(quick_sort($left), array($pivot), quick_sort($right));
	}
}