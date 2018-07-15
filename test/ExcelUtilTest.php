<?php

namespace takamoriyamashiro\ExcelUtil\Tests;

use PHPUnit\Framework\TestCase;
use takamoriyamashiro\ExcelUtil\ExcelUtil;

class ExcelUtilTest extends TestCase
{
	
	
	public function setUp()
	{
		
	}
	
	
	
	public function testColumnName()
	{
		$this->assertTrue(ExcelUtil::getCellName('10')=='J');
		$this->assertTrue(ExcelUtil::getCellName(28)=='AB');
		$this->assertTrue(ExcelUtil::getCellName(128)=='DX');
		$this->assertFalse(ExcelUtil::getCellName(0));
		
		echo "\n";
		for($index=1;$index<100;$index++){
			echo $index.":".ExcelUtil::getCellName($index)."\n";
		}
		
	}
	
	
	
}
