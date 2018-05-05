<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AnswerTest extends DuskTestCase
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
                ->clickLink('Answer Question')
                ->value('#body', 'axbghgfhgfudfihsdjfhsygu')
                ->click('#submit')
                ->assertSee('Saved')
                ->clickLink('View')
                ->clickLink('Edit Answer')
                ->value('#body', 'fjkhfkjhflhkjfhgkjfhkj')
                ->click('#submit')
                ->assertSee('Updated')
                ->clickLink('Correct')
                ->assertSee('Answer is marked correct')
                ->click('#submit')
                ->assertSee('Delete')
                ->click('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('FAQ');
        });
    }
}