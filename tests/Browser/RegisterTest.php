<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
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
                ->assertTitle('FAQ');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertSee('FAQ');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->clickLink('Register')
                ->assertSee('Register');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->clickLink('Register')
                ->value('#email', 'mjuvw1224231f@ujm.com')
                ->value('#password', 'asdfghjkl')
                ->value('#password-confirm', 'asdfghjkl')
                ->click('button[type="submit"]')
                ->assertSee('Questions');
        });

    }
}
