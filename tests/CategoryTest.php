<?php
	//require './admin/classComponents.php';
	use PHPUnit\Framework\TestCase;
	class CategoryTest extends TestCase
	{
		private $cat;

		protected function setUp() : void
		{
			$this->cat = new Category();
			$this->cat->setLink('https://main');
		}

		protected function tearDown() : void
		{

		}
		/**
		* @dataProvider LinkProvider
		*/
		public function testLink($link)
		{
			$this->assertEquals($link, $this->cat->getLink());
		}

		public function LinkProvider () 
		{
			return ["one" => ['https://main1'], "two" => ['https://main2'], "correct" => ['https://main']];
		}
	}
?>