<?php
class AdminPartnersCest
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
	    $I->wantTo('Проверить работу страницы администратора "Партнёры"');
	    $I->amOnPage('/admin/partnersPage.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('Партнер'); // Фраза или ее часть с главной страницы
	}

}
?>