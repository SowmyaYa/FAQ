<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->clickLink('Login')
                ->value('#email', 'mju@ujm.com')
                ->value('#password', 'asdfghjkl')
                ->click('button[type="submit"]')
                ->assertSee('Questions')
                ->click('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('FAQ');
        });

    }
}
