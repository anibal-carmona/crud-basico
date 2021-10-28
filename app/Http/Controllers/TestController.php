<?php

namespace App\Http\Controllers;

use App\Models\User;

// use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testUser()
    {
        $user = User::where('email','test@mail.com')->firstOr(function () {
    
            $new = User::factory()->create([
                'name' => 'Usuario Test',
                'email' => 'test@mail.com'
            ]);
            
            return $new;

        });

        return $user;
    }
}
