<?php

namespace yamaaaaaa\ExcelUtil\Tests;

use PHPUnit\Framework\TestCase;
use yamaaaaaa\ExcelUtil\ExcelUtil;

class ExcelUtilTest extends TestCase
{
	
	
	public function setUp()
	{
		
	}
	
	
	public function testGetIndex()
	{
		echo "\n";
		for ($index = 1; $index < 100; $index++) {
			$cellName = ExcelUtil::getCellName($index);
			$idx = ExcelUtil::getIndex($cellName);
			echo $index . " > " . $cellName . " > " .ExcelUtil::getIndex($cellName). "\n";
		}
		
		$this->assertTrue(ExcelUtil::getIndex('J') == '10');
		$this->assertTrue(ExcelUtil::getIndex('AB') == 28);
		$this->assertTrue(ExcelUtil::getIndex('DX') == 128);
		$this->assertTrue(ExcelUtil::getIndex('j') == '10');
		$this->assertTrue(ExcelUtil::getIndex('ab') == 28);
		$this->assertTrue(ExcelUtil::getIndex('dx') == 128);
		
		
	}
	
	
	public function testGetCellName()
	{
		$this->assertTrue(ExcelUtil::getCellName('10') == 'J');
		$this->assertTrue(ExcelUtil::getCellName(28) == 'AB');
		$this->assertTrue(ExcelUtil::getCellName(128) == 'DX');
		$this->assertFalse(ExcelUtil::getCellName(0));
		
		echo "\n";
		for ($index = 1; $index < 100; $index++) {
			echo $index . ":" . ExcelUtil::getCellName($index) . "\n";
		}
		
	}
	
	
}
