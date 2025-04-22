<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CapstoneModel;
class App extends Controller
{
    public function index() {

        return view('pages.homepage');
    }

    public function upload() {

        return view('pages.uploadproject');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title'     => 'required',
            'type'      => 'required',
            'year'      => 'required|integer',
            'g_name'    => 'required',
            'file'      => 'required|mimes:docx,pdf,doc,xlsx,xls,pptx,ppt',
        ]);

        if ($request->hasFile('file')) {

            

            $file       = $request->file('file');
            $extension  = $file->getClientOriginalExtension();
            $orig       = $file->getClientOriginalName();
            $filename   = md5($orig) . '.' . $extension;
            $filePath   = $file->storeAs('projects', $filename, 'public');

            CapstoneModel::create(
                [
                    'user_id'   => Auth::id(),
                    'title'     => $data['title'],
                    'year'      => $data['year'],
                    'g_name'    => $data['g_name'],
                    'type'      => $data['type'],
                    'desc'      => "Fucking awesome project",
                    'file'      => $filename,
                ]
            );
            return back()->with('msg', 'File uploaded');
        }

        return back()->with('msg', 'No file selected.');
    }
}
