<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    // Index: List all projects
    public function index()
    {
        $projects = Project::latest()->paginate(25);
        return view('admin.section.project.index', compact('projects'));
    }

    // Create: Show form to create a project
    public function create()
    {
        return view('admin.section.project.create');
    }

    // Store: Save new project
    public function store(Request $request)
    {
        // Validation rules based on the fields you provided
        $request->validate([
            'title' => 'required|string|max:255',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming the banner is an image file
            'bannerUrl' => 'nullable|url', // Assuming the banner is an image url
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming the banner is an image file
            'logoUrl' => 'nullable|url', // Assuming the log is an image url
            'category' => 'required|string|max:100', // The category could be a string (you might want to check for predefined categories if needed)
            'technologies' => 'nullable|string|max:255', // Comma-separated list of technologies
            'url' => 'nullable|url|max:255', // URL of the project
            'shortDescription' => 'nullable|string|max:255', // Short description (could be optional)
            'description' => 'required|string', // Full description of the project
            'country' => 'nullable|string|max:100', // Country where the project was done
            'budget' => 'nullable|string', // Budget of the project
            'type' => 'nullable|string|max:100', // Type of project (e.g., Web, App, etc.)
            'status' => 'required|in:draft,published,in_progress', // Project status (draft, published, or in progress)
            'startDate' => 'nullable|date', // Start date of the project
            'endDate' => 'nullable|date', // End date of the project
            'videoUrl' => 'nullable|url|max:255', // Optional link to a video (e.g., demo, presentation)
            'clientName' => 'nullable|string|max:100', // Client name (optional)
            'clientAvatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Client avatar image
            'clientAvatarUrl' => 'nullable|url',
            'clientFeedback' => 'nullable|string', // Feedback from the client (optional)
        ]);

        // Handle file uploads (if there are any)
        $bannerPath = $request->file('banner') ? $request->file('banner')->store('projects/banner', 'public') : $request->bannerUrl;
        $logoPath = $request->file('logo') ? $request->file('logo')->store('projects/logo', 'public') : $request->logoUrl;
        $clientAvatarPath = $request->file('clientAvatar') ? $request->file('clientAvatar')->store('projects/client_avatars', 'public') : $request->clientAvatarUrl;

        // Create the new project record
        Project::create([
            'title' => $request->title,
            'banner' => $bannerPath,
            'logo' => $logoPath,
            'category' => $request->category,
            'technologies' => $request->technologies,
            'url' => $request->url,
            'shortDescription' => $request->shortDescription,
            'description' => $request->description,
            'country' => $request->country,
            'budget' => $request->budget,
            'type' => $request->type,
            'status' => $request->status,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'videoUrl' => $request->videoUrl,
            'clientName' => $request->clientName,
            'clientAvatar' => $clientAvatarPath,
            'clientFeedback' => $request->clientFeedback,
        ]);

        // Redirect after successful project creation
        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    // Show: Display a single project
    public function show($id)
    {
        return view('admin.section.project.show', compact('project'));
    }

    // Edit: Show form to edit a project
    public function edit($id)
    {
        $data['categories'] = Category::all();
        $project = Project::findOrfail($id);
        $data['project'] = $project;

        if (!$project) {
            return view('admin.section.project.create')->with("error", "project not found!");
        }
        return view('admin.section.project.edit', $data);
    }


    public function changeStatus($id)
    {
        $project = Project::findOrFail($id);
        if ($project) {
            $project->status = !$project->status;
            $project->save();
            return back()->with("success", "Status changed successfully");
        }

        return redirect()->route('admin.projects.index')->with('error', 'project not found.');
    }

    // Update: Update a project
    public function update(Request $request, $id)
    {
        // Validation rules based on the fields you provided
        $request->validate([
            'title' => 'required|string|max:255',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming the banner is an image file
            'bannerUrl' => 'nullable|url', // Assuming the banner is an image file
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming the banner is an image file
            'logoUrl' => 'nullable|url', // Assuming the loog is an image url
            'category' => 'required|string|max:100', // The category could be a string (you might want to check for predefined categories if needed)
            'technologies' => 'nullable|string|max:255', // Comma-separated list of technologies
            'url' => 'nullable|url|max:255', // URL of the project
            'shortDescription' => 'nullable|string|max:255', // Short description (could be optional)
            'description' => 'required|string', // Full description of the project
            'country' => 'nullable|string|max:100', // Country where the project was done
            'budget' => 'nullable|string', // Budget of the project
            'type' => 'nullable|string|max:100', // Type of project (e.g., Web, App, etc.)
            'status' => 'required|in:draft,published,in_progress', // Project status (draft, published, or in progress)
            'startDate' => 'nullable|date', // Start date of the project
            'endDate' => 'nullable|date', // End date of the project
            'videoUrl' => 'nullable|url|max:255', // Optional link to a video (e.g., demo, presentation)
            'clientName' => 'nullable|string|max:100', // Client name (optional)
            'clientAvatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Client avatar image
            'clientAvatarUrl' => 'nullable|url', // Client avatar image url
            'clientFeedback' => 'nullable|string', // Feedback from the client (optional)
        ]);

        // Find the project by ID
        $project = Project::findOrFail($id);
        if (!$project) {
            return redirect()->route('admin.projects.index')->with('error', 'Project not found!');
        }

        // Handle the banner image if a new one is uploaded
        $bannerPath = $project->banner;
        if ($request->file('banner')) {
            // Delete the old banner image if a new one is uploaded
            if ($bannerPath && Storage::disk('public')->exists($bannerPath)) {
                Storage::disk("public")->delete($bannerPath);
            }
            $bannerPath = $request->file('banner')->store('projects/banner', 'public');
        } else {
            // old banner url 
            if ($request->bannerUrl)
                $bannerPath =  $request->bannerUrl;
        }


        // Handle the logo image if a new one is uploaded
        $logoPath = $project->logo;
        if ($request->file('logo')) {
            // Delete the old logo image if a new one is uploaded
            if ($logoPath && Storage::disk('public')->exists($logoPath)) {
                Storage::disk("public")->delete($logoPath);
            }
            $logoPath = $request->file('logo')->store('projects/logo', 'public');
        } else {
            // old logo url 
            if ($request->logoUrl)
                $logoPath = $request->logoUrl;
        }


        // Handle the client avatar image if a new one is uploaded
        $clientAvatarPath = $project->clientAvatar;
        if ($request->file('clientAvatar')) {
            // Delete the old client avatar image if a new one is uploaded
            if ($clientAvatarPath && Storage::disk('public')->exists($clientAvatarPath)) {
                Storage::disk("public")->delete($clientAvatarPath);
            }
            $clientAvatarPath = $request->file('clientAvatar')->store('projects/client_avatars', 'public');
        } else {
            // old avatar url 
            if ($request->clientAvatarUrl)
                $clientAvatarPath =  $request->clientAvatarUrl;
        }


        // Update the project with the provided data
        $project->update([
            'title' => $request->title,
            'banner' => $bannerPath,
            'logo' => $logoPath,
            'category' => $request->category,
            'technologies' => $request->technologies,
            'url' => $request->url,
            'shortDescription' => $request->shortDescription,
            'description' => $request->description,
            'country' => $request->country,
            'budget' => $request->budget,
            'type' => $request->type,
            'status' => $request->status,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'videoUrl' => $request->videoUrl,
            'clientName' => $request->clientName,
            'clientAvatar' => $clientAvatarPath,
            'clientFeedback' => $request->clientFeedback,
        ]);

        // Redirect after successful project update
        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    // Destroy: Delete a project
    public function destroy($id)
    {
        $project = Project::findOrfail($id);
        if (!$project) {
            return view('admin.section.project.create')->with("error", "project not found!");
        }
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk("public")->delete($project->image);
        }
        $project->delete();

        return redirect()->back()->with('success', 'project deleted successfully.');
    }
}
