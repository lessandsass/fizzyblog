<?php

namespace App\Http\Controllers;

use App\Models\Fizzy;
use Illuminate\Http\Request;

class FizzyController extends Controller
{

    public function show(Fizzy $fizzy) {
        return view('fizzies.show', compact('fizzy'));
    }

    public function store()  {

        request()->validate([
            'content' => 'required|min:3|max:250'
        ]);

        $fizzy = Fizzy::create(['content' => request()->get('content', '')]);
        return redirect()->route('dashboard')->with('success', 'The fizzy created successfully.');

    }

    public function destroy (Fizzy $fizzy) {
        $fizzy->delete();
        return redirect()->route('dashboard')->with('delete', 'The fizzy deleted successfully.');
    }

    public function edit(Fizzy $fizzy) {
        // $editing = false;
        return view('fizzies.show', compact('fizzy'));
    }

    public function update(Fizzy $fizzy) {

        request()->validate([
            'fizzy' => 'required|min:3|max:250'
        ]);

        $fizzy->content = request()->get('content');
        $fizzy->save();

        return redirect()->route('fizzies.show', $fizzy->id)->with('success', "Fizzy updated succesfully");
    }

}
