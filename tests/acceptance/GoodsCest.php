<?php
class GoodsCest
{

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
	public function tryToTest(AcceptanceTester $I)
	{
	    $I->wantTo('Проверить работу страницы "Товары"');
	    $I->amOnPage('/goodsPage.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('d'); // Фраза или ее часть с главной страницы
	}

}
?>