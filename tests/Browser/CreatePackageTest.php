<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreatePackageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->value('#email', 'samson@test.com')
                    ->value('#password', '00000000')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/dashboard');

                    $browser->visit('/dashboard/packages')
                    ->assertSee('packages')
                    ->click('button[name="add"]');

        });
    }
}
