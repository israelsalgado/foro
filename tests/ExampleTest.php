<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
                'name' => 'Israel Salgado',
                'email' => 'admin@styde.net',
            ]);
        $this->actingAs($user, 'api');
        $this->visit('api/user')
             ->see('Israel Salgado')
             ->see('admin@styde.net');
    }
}
