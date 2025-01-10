<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::withCount('tasks')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact('projects'));
    }
} 