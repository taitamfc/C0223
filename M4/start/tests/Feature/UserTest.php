<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
}
