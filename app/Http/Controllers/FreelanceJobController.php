<?php
namespace App\Http\Controllers;

use App\Models\FreelanceJob;
use Illuminate\Http\Request;

class FreelanceJobController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        FreelanceJob::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Freelance job added successfully!');
    }
}
