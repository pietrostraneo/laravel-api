<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::with(['type', 'technologies'])->get();
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }

    public function show($slug)
    {
        $project = Project::with('type', 'technologies')->where('slug', $slug)->first();

        return response()->json([
            'succes' => true,
            'results' => $project,
        ]);
    }
}
