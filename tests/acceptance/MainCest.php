<?php
class MainCest
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
	    $I->wantTo('Проверить работу главной страницы');
	    $I->amOnPage('/main.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('Главная'); // Фраза или ее часть с главной страницы
	}

}
?>