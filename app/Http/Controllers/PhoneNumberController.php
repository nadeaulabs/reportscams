<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneNumber;

class PhoneNumberController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|regex:/^[0-9]{10,15}$/',
        ]);

        $phoneNumber = PhoneNumber::where('phone_number', $request->phone_number)->first();

        if ($phoneNumber) {
            $phoneNumber->increment('count');
        } else {
            PhoneNumber::create(['phone_number' => $request->phone_number]);
        }

        return redirect()->back()->with('success', 'Phone number reported successfully.');
    }
}
