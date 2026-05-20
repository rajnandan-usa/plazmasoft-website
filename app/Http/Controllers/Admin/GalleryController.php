<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryTag;
use App\Models\Mediagallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Display a listing of the media files
    public function index()
    {
        $mediaFiles = Mediagallery::latest()->paginate(25);
        return view('admin.section.gallery.index', compact('mediaFiles'));
    }

    // Show the form for creating a new media file
    public function create()
    {
        $data['galleryTagEdit'] = null;
        $data['galleryTags'] = GalleryTag::all();
        return view('admin.section.gallery.create', $data);
    }

    // Store a newly created media file in the database
    // Store a newly created media file in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mediaFile' => 'required|file|mimes:jpg,jpeg,png,svg|max:2048',
            'galleryCategory' => "required",
            'description' => 'nullable|string|max:255', // Added max length for description
        ]);

        // Handle file upload
        if ($file = $request->file('mediaFile')) {
            // Store the uploaded file and get its path
            $uploadedFile = $file->store('uploads/gallery', "public");
            $validated['type'] = $file->getClientMimeType();

            // Check if the file was uploaded successfully
            if ($uploadedFile) {
                $uploadMediaGallery = Mediagallery::create([
                    'mediaFile' => $uploadedFile,
                    'tags' => json_encode($validated['galleryCategory']),
                    'type' => $validated['type'], // mime type
                    'description' => $validated['description'],
                ]);

                if ($uploadMediaGallery) {
                    return redirect()->route('admin.galleries.index')
                        ->with('success', 'File uploaded successfully');
                }
            } else {
                return redirect()->back()->with('error', 'Failed to store uploaded file');
            }
        }

        // If the upload fails, return error message
        return redirect()->back()->with('error', 'Failed to upload file');
    }

    public function tagStore(Request $request)
    {
        $validated = $request->validate([
            'tagName' => 'required|string|max:50|unique:gallery_tags,name'
        ]);


        $galleryTag = GalleryTag::create([
            'name' => $validated['tagName'],
        ]);

        if ($galleryTag) {
            return redirect()->route("admin.galleries.create")->with('success', 'Gallery Tag created successfully');
        }
        return redirect()->route("admin.galleries.create")->with('error', 'Failed to Gallery Tag');
    }


    // Display a specific media file
    public function show($id)
    {
        $mediaGallery = Mediagallery::findOrFail($id);
        if (!$mediaGallery)
            return back()->with("error", "Media file not found");

        return view('admin.section.gallery.show', compact('mediaGallery'));
    }

    // Show the form for editing a specific media file
    public function edit($id)
    {
        $galleryTags = GalleryTag::all();
        $mediaGallery = Mediagallery::findOrFail($id);
        if (!$mediaGallery)
            return back()->with("error", "Media file not found");

        return view('admin.section.gallery.edit', compact('mediaGallery','galleryTags'));
    }

    public function tagEdit($id)
    {
        $galleryTags = GalleryTag::all();
        $galleryTagEdit = GalleryTag::findOrFail($id);
        if (!$galleryTagEdit)
            return redirect()->route("admin.galleries.create")->with("error", "Gallery category not found");

        return view('admin.section.gallery.create', compact('galleryTagEdit', 'galleryTags'));
    }


    public function changeStatus($id)
    {
        $mediaGallery = Mediagallery::findOrFail($id);
        if ($mediaGallery) {
            $mediaGallery->status = !$mediaGallery->status;
            $mediaGallery->save();
            return back()->with("success", "Status changed successfully");
        }

        return redirect()->route('admin.galleries.index')->with('error', 'Media File not found.');
    }

    // Update a specific media file in the database
    // Update an existing media file entry in the database
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'mediaFile' => 'nullable|file|mimes:jpg,jpeg,png,svg|max:2048',
            'galleryCategory'=> "required",
            'description' => 'nullable|string|max:255', 
        ]);

        $mediaGallery = Mediagallery::findOrFail($id);

        if ($mediaGallery && $file = $request->file('mediaFile')) {
            // Delete the old file if it exists
            if ($mediaGallery->mediaFile && Storage::disk('public')->exists($mediaGallery->mediaFile)) {
                Storage::disk("public")->delete($mediaGallery->mediaFile);
            }
            $uploadedFile = $file->store('uploads/gallery', "public");
            $mediaGallery->mediaFile = $uploadedFile;
            $mediaGallery->type = $file->getClientMimeType(); // Update the file type
        }

        // Update other fields (description)
        $mediaGallery->tags = json_encode($validated['galleryCategory']);
        $mediaGallery->description = $validated['description'];

        // Save the updated entry
        if ($mediaGallery->save()) {
            return redirect()->back()->with('success', 'Media file updated successfully');
        }

        // If the update fails, return an error message
        return redirect()->back()->with('error', 'Failed to update media file');
    }

    public function tagUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'tagName' => 'required|string|max:50|unique:gallery_tags,name,' . $id,
        ]);

        $galleryTag = GalleryTag::findOrFail($id)?->update(["name" => $validated['tagName']]);

        if ($galleryTag) {
            return redirect()->route("admin.galleries.create")->with('success', 'Gallery category updated successfully');
        }
        return redirect()->route("admin.galleries.create")->with('error', 'Failed to update Gallery category');
    }


    // Remove a specific media file from the database
    public function destroy($id)
    {
        $mediaGallery = Mediagallery::findOrFail($id);

        if ($mediaGallery->mediaFile && Storage::disk('public')->exists($mediaGallery->mediaFile)) {
            Storage::disk("public")->delete($mediaGallery->mediaFile);
        }

        if ($mediaGallery && $mediaGallery->delete())
            return redirect()->route('admin.galleries.index')->with('success', 'Media file deleted successfully');

        return back()->with("error", "Failed to delete media file");
    }


    // Remove a specific media file from the database
    public function tagDestroy($id)
    {
        $galleryTag = GalleryTag::findOrFail($id);

        if ($galleryTag && $galleryTag->delete())
            return redirect()->route("admin.galleries.create")->with('success', 'Gallery category deleted successfully');

        return redirect()->route("admin.galleries.create")->with("error", "Failed to delete Gallery category");
    }
}
