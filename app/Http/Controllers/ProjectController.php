<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProjectStoreRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     * Can insert more image.
     */
    public function store(ProjectStoreRequest $request)
    {
        $request->validated();
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $image = $file->store('public/projects');
                $images[]=$image;
            }
        }
        /*Insert your data*/

        Project::create( [
            'name' => $request->name,
            'more' => $request->more,
            'description' => $request->description,
            'kind' => $request->kind,
            'images'=>  implode("|",$images),
            //you can put other insertion here
    ]);


    return redirect('/admin/projects')->with(['info' => 'Podarilo sa pridať projekt', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $request->validate([
            'name' => 'required',
            'more' => 'required',
            'description' => 'required'
        ]);

        $images = $project->images;

        if($request->hasFile('images'))
        {
            Storage::delete(explode("|",$project->images));
            $images=array();

            if($files=$request->file('images')){
                foreach($files as $file){
                    $image = $file->store('public/projects');
                    $images[]=$image;
                }
            }

            $images = implode("|",$images);
        };

        $project->update([
            'name' => $request->name,
            'more' => $request->more,
            'description' => $request->description,
            'images' => $images,
        ]);

        return redirect('/admin/projects')->with(['info' => 'Podarilo sa pridať projekt', 'type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Project $project)
    {
        Storage::delete(explode("|",$project->images));
        $project->delete();

        if($request->ajax())
        {
            return response()->json(['flash' => 'Project bol vymazaný' ,
                                     'status'=> '1',
                                     'id' => $project->id
                                    ]);
        }

        return redirect('/admin/projects')->with(['info' => 'Projekt bol vymazaný', 'type' => 'danger']);
    }
}
