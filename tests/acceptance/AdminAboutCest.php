<?php
class AdminAboutCest
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
	    $I->wantTo('Проверить работу страницы администратора "О нас"');
	    $I->amOnPage('/admin/aboutPage.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('компании'); // Фраза или ее часть с главной страницы
	}

}
?>