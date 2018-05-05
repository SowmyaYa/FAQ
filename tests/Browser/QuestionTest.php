<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class QuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/home')
                ->value('#email', 'mju@ujm.com')
                ->value('#password', 'asdfghjkl')
                ->click('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('Create a Question')
                ->assertSee('Create Question')
                ->value('#body', 'axbghgfhgfuygu')
                ->click('#submit')
                ->assertSee('IT WORKS!')
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('Edit Question')
                ->assertSee('Body')
                ->value('#body', 'djfhsjkdfhkjfgshdjgfkaj')
                ->click('#submit')
                ->assertSee('Saved')
                ->click('#submit')
                ->assertSee('Deleted')
                ->click('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('FAQ');

        });
    }
}
