<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ContactRequest;
use App\Models\User;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        if ($request->validated()) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'password' => bcrypt('12345678'),
            ]);
        }

        return back()->with('success', 'Message send successfully');
    }
}
