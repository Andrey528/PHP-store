<?php
class PartnerCest
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
	    $I->wantTo('Проверить работу страницы "Партнеры"');
	    $I->amOnPage('/partners.php');
	    $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
	    $I->see('Партнёры'); // Фраза или ее часть с главной страницы
	}

}
?>