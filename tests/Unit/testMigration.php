<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\User;

class testMigration extends TestCase
{
    use DatabaseMigrations;

    // public function testMigration()
    // {
    //     $this->artisan('migrate');

    //     $this->assertTrue(Schema::hasTable('users'));

    // }
    public function test_user_duplicates()
    {
        $user1 = User::make([
            'name' => 'john',
            'email' => 'john@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'john',
            'email' => 'john@gmail.com'
        ]);
        $user3 = User::make([
            'name' => 'beshoy',
            'email' => 'beshoy@gmail.com'
        ]);

        $this->assertTrue($user1->name == $user2->name);
        // $this->assertTrue($user1->name != $user3->name);
    }

}
