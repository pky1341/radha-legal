<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function userForm()
    {
        return view('user-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'service' => 'required|string',
            'message' => 'nullable|string'
        ]);

        Lead::create($validated);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function adminDashboard()
    {
        $leads = Lead::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('leads'));
    }
}
