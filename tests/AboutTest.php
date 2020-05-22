<?php
	//require './admin/classComponents.php';77777777777777777777777777777777777
	use PHPUnit\Framework\TestCase;
	class AboutTest extends TestCase
	{
		private $file;

		protected function setUp() : void
		{
			$this->file = new About();
		}

		protected function tearDown() : void
		{

		}

		/**
		* @dataProvider AboutProvider
		*/

		public function testAbout($file)
		{
			$this->assertEquals($file, $this->file->getFile());
		}

		public function AboutProvider () 
		{
			return ["one" => ['text.txt'], "two" => ['../resources/mainpage.txt'], "correct" => ['../resources/mainPage.txt']];
		}
	}
?>