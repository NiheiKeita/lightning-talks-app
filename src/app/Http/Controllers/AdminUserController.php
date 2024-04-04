<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        return "index";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        return $request . "index";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminUser $adminUser): string
    {
        return $request . $adminUser . "index";
    }
}
