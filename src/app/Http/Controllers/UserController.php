<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): string
    {
        return "index";
    }

    public function store(Request $request): string
    {
        return $request . "store";
    }

    public function show(User $user): string
    {
        return $user . "show";
    }

    public function update(Request $request, User $user): string
    {
        return $request . $user . "update";
    }
}
