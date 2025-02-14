<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,avi,mkv', 
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->title,
            'file_path' => $videoPath,
        ]);

        return redirect()->route('videos.create')->with('success', 'Video uploaded successfully');
    }
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }
    public function create()
    {
        return view('videos.upload');
    }

}
