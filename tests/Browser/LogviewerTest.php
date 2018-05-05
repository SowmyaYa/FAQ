<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogviewerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/charts')
                ->assertTitle('Whoops! There was an error.')
                ->visit('http://localhost:8000/log-viewer')
                ->assertSee('Dashboard');

        });

    }
}
