<?php
class AdminMainCest
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
	    $I->wantTo('Проверить работу главной страницы администратора');
	    $I->amOnPage('/admin/mainPage.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('Новость'); // Фраза или ее часть с главной страницы
	}

}
?>