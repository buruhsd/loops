<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/')
            //         ->clickLink('Register')
            //         ->value('#name', 'Samson')
            //         ->value('#email', 'aljawad.@test.com')
            //         ->value('#password', '00000000')
            //         ->value('#password_confirmation', '00000000')
            //         ->click('button[type="submit"]');

            $browser->visit('/')
                    ->clickLink('Log in')
                    ->value('#email', 'samson@test.com')
                    ->value('#password', '00000000')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/dashboard')
                    ->press('Samson');
                    if ($browser->seeLink('Log Out')) {
                        $browser->clickLink('Log Out')
                        ->assertPathIs('/');
                    };
        });
    }
}
