<?php
	//require './admin/classComponents.php';
	use PHPUnit\Framework\TestCase;
	class GoodPriceTest extends TestCase
	{
		private $good;

		protected function setUp() : void
		{
			$this->good = new GoodPrice();
			$this->good->setPrice(3999);
		}

		protected function tearDown() : void
		{

		}

		/**
		* @dataProvider PriceProvider
		*/

		public function testPrice($price)
		{
			$this->assertEquals($price, $this->good->getPrice());
		}

		public function PriceProvider () 
		{
			return ["one" => [2000], "two" => [140], "correct" => [3999]];
		}
	}
?>