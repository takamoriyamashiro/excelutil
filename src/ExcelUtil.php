<?php

namespace takamoriyamashiro\ExcelUtil;

class ExcelUtil
{
	
	const INDEXES = [
		'A' => 1,
		'B' => 2,
		'C' => 3,
		'D' => 4,
		'E' => 5,
		
		'F' => 6,
		'G' => 7,
		'H' => 8,
		'I' => 9,
		'J' => 10,
		
		'K' => 11,
		'L' => 12,
		'M' => 13,
		'N' => 14,
		'O' => 15,
		
		'P' => 16,
		'Q' => 17,
		'R' => 18,
		'S' => 19,
		'T' => 20,
		'U' => 21,
		'V' => 22,
		'W' => 23,
		'X' => 24,
		'Y' => 25,
		'Z' => 26
	];
	
	public static function getIndex($cellName)
	{
		
		
	}
	
	public static function getCellName($index)
	{
		$result = [];
		if($index==0){
			return false;
		}
		while($index > 0){
			$remainder = ($index % 26) ?: 26;
			array_unshift($result, self::get1place($remainder));
			$index = ($index - $remainder) / 26;
		}
		return implode('',$result);
	}
	
	private static function get1place($remainder){
		return chr($remainder + 64);
	}
	
}