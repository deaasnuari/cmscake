<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = collect([
            (object) ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'phone' => '123-456-7890'],
            (object) ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'phone' => '234-567-8901'],
            (object) ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'phone' => '345-678-9012'],
            (object) ['name' => 'Bob Brown', 'email' => 'bob.brown@example.com', 'phone' => '456-789-0123'],
            (object) ['name' => 'Charlie Black', 'email' => 'charlie.black@example.com', 'phone' => '567-890-1234'],
        ]);

        return view('dashboard', compact('data'));
    }
}
