<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;

class UserController extends Controller
{
    public function show(string $id): Response
    {
        return Inertia::render('User/Show', [
          'user' => User::findOrFail($id)
        ]);
    }
}
