<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return "List of users";
    }

    public function create()
    {
        return "Create user form";
    }

    public function store(Request $request)
    {
        return "Store new user";
    }

    public function show($id)
    {
        return "Showing user {$id}";
    }

    public function edit($id)
    {
        return "Edit user {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Update user {$id}";
    }

    public function destroy($id)
    {
        return "Delete user {$id}";
    }
}