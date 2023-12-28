<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    //

    public function show(Idea $idea){
        return view('ideas.show', compact('idea'));
    }
    public function store(){
    request()->validate([
        'content' => 'required|min:3|max:255'
    ]);
    $idea = Idea::create([
        'content' => request()->get('content', ''),
        'username' => 'User1'
    ]);
    $idea->save();
    return redirect()->route('dashboard')->with('success', 'Idea was created successfully');
    }

    public function destroy(Idea $idea){
        $idea->delete();

        return redirect()->route('dashboard')->with('success','Idea deleted successfully!');
    }

    public function edit(Idea $idea){
        request()->validate([
            'content' => 'required|min:3|max:255'
        ]);
        $idea->content = request() -> get('content', '');
        $idea->save();
        return redirect()->route('ideas.show', $idea->id>with('success', "idea updated successfully"));
    }
}
