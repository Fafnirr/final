<?php

namespace App\Http\Controllers;

use App\Models\Tuto;
use Illuminate\Http\Request;

class TutoController extends Controller
{
    public function index()
    {
        $tutos = Tuto::all();
        return view ('tutoriels.index')->with('tutos', $tutos);
    }

    
    public function create()
    {
        return view('tutoriels.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Tuto::create($input);
        return redirect('tutoriels')->with('flash_message', 'Article Addedd!');  
    }

    
    public function show($id)
    {
        $tuto = Tuto::find($id);
        return view('tutoDetail')->with('tuto   ', $tuto);
    }

    
    public function edit($id)
    {
        $tuto = Tuto::find($id);
        return view('tutoriels.edit')->with('tuto', $tuto);
    }

  
    public function update(Request $request, $id)
    {
        $tuto = Tuto::find($id);
        $input = $request->all();
        $tuto->update($input);
        return redirect('tutoriels')->with('flash_message', 'Article Updated!');  
    }

   
    public function destroy($id)
    {
        Tuto::destroy($id);
        return redirect('tutoriels')->with('flash_message', 'Article deleted!');  
    }
}
