<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionController extends Controller
{
   
    public function view($file_id)
    {
          $file = File::where('id', $file_id)->first();
          return view('project.files.discussion.view', compact('file'));
    }

    public function create(request $request, $project_id)
    {
    	return view('project.files.discussion.index');
    }
}
