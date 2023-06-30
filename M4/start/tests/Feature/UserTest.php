<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
    // Kiem tra duong dan cho ung dung route
    public function test_route_user()
    {
        /*
        /users
        /users/create
        */ 
        $this->get('/users')->assertStatus(200);
        $this->get('/users/create')->assertStatus(200);
    }

    public function test_create_user_by_factory()
    {
        $user = User::factory(User::class)->create();//goi factory de tao moi du lieu
        $this->assertNotNull($user);//kiem tra ket qua tra ve co NULL hay khong
    }


}
