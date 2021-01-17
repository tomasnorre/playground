<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function phpVersionTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('PHP Version 7.4.14');
        $I->dontSee('Tomas Mikkelsen');
    }
}
