<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
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
