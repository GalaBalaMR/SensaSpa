<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index()
    {
        $massages = Massage::all();
        
        return view('massage.index', compact('massages'));
    }
    // return view with form for create a massage
    public function create()
    {
        return view('massage.create');
    }

    // store and validation massage 
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'massage' => 'required'
        ]);

        Massage::create([
            'name'  => $request->name,
            'massage'  => html_entity_decode($request->massage),
        ]);

        if($request->ajax())
        {
            return response()->json(['flash' => 'Podarilo sa vytvoriť nový kontent.',
                                     'status'=> '1'
                                    ]);
        }
        return back()->with(['flash' => 'Podarilo sa vytvoriť nový kontent.',
                                 'name'  => $request->name ,
                                 ]);
    }

    public function edit(Massage $massage)
    {
        return view('massage.edit', compact('massage'));
    }

    public function update(Request $request, Massage $massage)
    {
        $request->validate([
            'name'    => 'required',
            'massage' => 'required'
        ]);

        $massage->update([
            'name'  => $request->name,
            'massage'  => $request->massage
        ]);

        if($request->ajax())
        {
            return response()->json(['flash' => 'Podarilo sa upraviť kontent.',
                                     'massage'  => $request->massage ,
                                     'name'  => $request->name ,
                                     'status'=> '1'
                                    ]);
        }
        return back()->with(['flash' => 'Podarilo sa upraviť kontent.',
                                 'name'  => $request->name ,
                                 'status'=> '1'
                                 ]);

    }

    public function destroy(Request $request ,Massage $massage)
    {
        $id = $massage->id;
        $massage->delete();

        if($request->ajax())
        {
            return response()->json(['flash' => 'Kontent bol odstránený',
                                     'id'  => $id ,
                                     'status'=> '1'
                                    ]);
        }
        return back()->with(['info' => 'Kontent bol odstránený','type'  => 'danger']);

    }
}
