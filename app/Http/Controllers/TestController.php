<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        return User::paginate(10);
    }

    public function create(){
        return User::create([
            'name' => 'anton',
            'email' => rand(1,1000).'anton@anton.anton',
            'password' => \Hash::make('anton'),
        ]);
    }
}
