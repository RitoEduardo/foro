<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase{
    
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample(){
         
        $name = "Eduardo Garcia";
        $email = "isc.rito.garcia@gmail.com";
        $user = factory(\App\User::class)->create([
            'name' => $name,
            'email' => $email
        ]);
         
        $this->actingAs($user,'api');
        
        $this->visit('api/user')->see($name)->see($email);
    }
}
