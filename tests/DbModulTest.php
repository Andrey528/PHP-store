<?php
	//require './admin/classComponents.php';77777777777777777777777777777777777
	use PHPUnit\Framework\TestCase;
	class ModulTest extends TestCase
	{
		private $file_db;

		protected function setUp() : void
		{
		}

		protected function tearDown() : void
		{
		}
		public function testDbConnection()
		{
			try {
				$this->file_db = new PDO('sqlite:./resources/data.sqlite');
				$this->file_db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e) {
			    echo $e->getMessage();
			}
		}
/*		
		/**
		* @dataProvider ComponentDbForAddProvider
		*/
/*		public function testAddNew($folder, $file, $nameText, $descriptionText, $table)
		{
			$this->assertEquals(0, $this->$file_db->AddNew($folder, $file, $nameText, $descriptionText, $table));
		}

		public function ComponentDbForAddProvider () 
		{
			return ["correct" => ['../resources/goods/', '1.img', 'admin', '2', 'GoodsCategory']];
		}

		/**
		* @dataProvider ComponentDbForDeleteGoodsProvider
		*/ 
/*		public function testAddNew($id, $table)
		{
			$this->assertEquals(0, $this->$file_db->DeleteGoods($id, $table));
		}

		public function ComponentDbForDeleteGoodsProvider () 
		{
			return ["correct" => [1, 'Goods']];
		}

		/**
		* @dataProvider ComponentDbForChangeGoodsProvider
		*/ 
/*		public function testAddNew($id, $table, $folder)
		{
			$this->assertEquals(0, $this->$file_db->changeGoods($id, $table, $folder));
		}

		public function ComponentDbForChangeGoodsProvider () 
		{
			return ["correct" => [1, 'Service', '../resources/service/']];
		} 
*/
	}
?>