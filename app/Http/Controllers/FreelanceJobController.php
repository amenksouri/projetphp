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

        return redirect()->route('list_freelance')->with('success', 'Freelance job added successfully!');


        
    }

    public function index()
    {
        $jobs = FreelanceJob::all(); // Fetch all jobs from the database

        return view('list_freelance', compact('jobs')); // Pass jobs data to the view
    }

    public function destroy($id)
    {
        $job = FreelanceJob::findOrFail($id);
        $job->delete();

        return redirect()->route('list_freelance')->with('success', 'Freelance deleted successfully');
    }
    public function apply($id)
    {
        $job = FreelanceJob::findOrFail($id);
        $job->status = 'applied';
        $job->save();

        return redirect()->route('list_freelance')->with('success', 'Freelance status updated to applied');
    }
}
