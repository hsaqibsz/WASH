<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Auth;
use Session;


class FileController extends Controller
{


   public function update(request $request)
   {
return 'ok';
   }

	public function edit($id)
	{
		$file = File::where('id', $id)->first();

		return view('project.files.file_edit', compact('file'));
	}


    public function store(request $request, $id)
    {
          /*file*/
               $file_name = null;
               $file_path = null;
               if ($request->file !== null) {
                   $file = $request->file('file');
                   $file_name = uniqid().$file->getClientOriginalName();
                   $path = base_path("public/uploads/projects/".$id."/file/".$request->category."/".date('Y')."/".date('M'));
                   $file->move($path, $file_name);
            
               } 



               $file = new File;

               $file->project_id = $id;
               $file->user_id = Auth::user()->id;
               $file->category = $request->category;
               $file->pages = $request->pages;
               $file->size = $request->size;
               $file->size_min = $request->size_min;
               $file->label = $request->label;
               $file->file =  "/uploads/projects/".$id."/file/".$request->category."/".date('Y')."/".date('M')."/".$file_name;
               $file->save();

               Session::flash('success',  'The file has been saved successfully');

               return redirect()->back();
    }
}
