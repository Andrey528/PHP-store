<?php
	//require './admin/classComponents.php';77777777777777777777777777777777777
	use PHPUnit\Framework\TestCase;
	class NewsTest extends TestCase
	{
		private $data;

		protected function setUp() : void
		{
			$this->data = new News();
		}

		protected function tearDown() : void
		{

		}

		/**
		* @dataProvider NewsProvider
		*/

		public function testAbout($data)
		{
			$this->assertEquals($data, $this->data->getData());
		}

		public function NewsProvider () 
		{
			return ["one" => ['00:00:00 15.12.2020'], "two" => ['10.8.2015'], "correct" => [date(" H : i : s d - m - Y ")]];
		}
	}
?>