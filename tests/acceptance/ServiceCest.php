<?php
class ServiceCest
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
	    $I->wantTo('Проверить работу страницы "Услуги"');
	    $I->amOnPage('/servicePage.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('вентиляции'); // Фраза или ее часть с главной страницы
	}

}
?>