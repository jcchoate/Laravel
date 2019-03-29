<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Subscription extends Controller
{
    public function create()
    {
        $user = User::find(1);

        $user->newSubscription('main', 'monthly')->create($token);
    }
}
