<?php
class AdminServiceCest
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
	    $I->wantTo('Проверить работу страницы администратора "Услуги"');
	    $I->amOnPage('/admin/servicePage.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('вентиляции'); // Фраза или ее часть с главной страницы
	}

}
?>