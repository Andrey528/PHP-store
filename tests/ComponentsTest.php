<?php
	require './admin/classComponents.php';
	use PHPUnit\Framework\TestCase;
	class ComponentsTest extends TestCase
	{
		private $comp;

		protected function setUp() : void
		{
			$this->comp = new Components();
			$this->comp->setID(2);
			$this->comp->setTitle('Admin');
			$this->comp->setDesc('SomeThing');
			$this->comp->setImage(3);
		}

		protected function tearDown() : void
		{

		}

		/**
		* @dataProvider ComponentProvider
		*/

		public function testComponent($id, $title, $desc, $img)
		{
			$this->assertEquals($id, $this->comp->getID());
			$this->assertEquals($title, $this->comp->getTitle());
			$this->assertEquals($desc, $this->comp->getDesc());
			$this->assertEquals($img, $this->comp->getImage());
		}

		public function ComponentProvider () 
		{
			return ["one" => [3, 'admin', 'admin', 2], "two" => [5, 'admin', 'Admin', 2], "correct" => [2, 'Admin', 'SomeThing', 3]];
		}
	}
?>