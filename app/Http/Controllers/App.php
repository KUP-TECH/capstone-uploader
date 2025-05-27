<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CapstoneModel;
class App extends Controller
{
    public function index() {
        $data = [];

        $data['count']  = $capstone = CapstoneModel::count();
        $data['iot']   = CapstoneModel::where('type', 'IoT')->count();
        $data['app']   = CapstoneModel::where('type', 'App')->count();
        $data['web']   = CapstoneModel::where('type', 'Web')->count();
        

        return view('pages.homepage', ['data' => $data]);
    }

    public function list(Request $request) {

        $search = $request->input('search');
        if ($search) {
            $capstone = CapstoneModel::where('title', 'LIKE', "%{$search}%")
                ->get();
        } else {
            $capstone = CapstoneModel::all();
        }


        return view('pages.listofcapstone', ['data'=> $capstone]);
    }

    public function upload() {

        return view('pages.uploadproject');
    }

    public function delete(Request $request) {
        $id = $request->input('id');
        $capstone = CapstoneModel::find($id);
        if ($capstone) {
            
            if($capstone['user_id'] != Auth::id() && Auth::user()->role != 'admin') {
                return back()->with('msg', 'You are not authorized to delete this project.');
            }
            

            if($capstone['file']) {
                $filePath = public_path('storage/projects/' . $capstone['file']);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            $capstone->delete();
            return back()->with('msg', 'Project deleted successfully.');
        } else {
            return back()->with('msg', 'Project not found.');
        }
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('msg', 'Logged out successfully.');
    }


    public function download(Request $request) {
        $id = $request['id'];
        $capstone = CapstoneModel::find($id);
        if ($capstone) {
            $filePath = public_path('storage/projects/' . $capstone['file']);
            return response()->download($filePath);
        } else {
            return back()->with('msg', 'Project not found.');
        }

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

            $model = CapstoneModel::create(
                [
                    'user_id'   => Auth::id(),
                    'title'     => $data['title'],
                    'year'      => $data['year'],
                    'g_name'    => $data['g_name'],
                    'type'      => $data['type'],
                    'file'      => $filename,
                ]
            );
            return back()->with('msg', 'File uploaded');
        }

        return back()->with('msg', 'No file selected.');
    }
}
