<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Letters;

class LetterController extends Controller
{
    public function index(Request $request){

        $letters = Letters::latest()->paginate(5);
    
        return view('index',compact('letters'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'confidential'=> 'required', 
            'baf_head'=> 'required',
            'maintanence'=> 'required',
            'supply'=> 'required',
            'dhaka_canton'=> 'required',
            
        ]);
    
        Letters::create($request->all());
     
        return redirect()->route('index');
        
    }
    
    public function show(Letters $letter){
        return view('show',compact('letter'));
    }

    public function edit(Letters $letter){
        return view('edit',compact('letter'));
    }

    public function update(Request $request, Letters $letter){

        $request->validate([
            'confidential'=> 'required', 
            'baf_head'=> 'required',
            'maintanence'=> 'required',
            'supply'=> 'required',
            'dhaka_canton'=> 'required',
        ]);
        $letter->update($request->all());
        return redirect()->route('index');
        
    }
    public function destroy(Letters $letter){
        
        $letter->delete();
        return redirect()->route('index');
    }
    
}
