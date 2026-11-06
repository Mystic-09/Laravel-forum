<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    // Alle onderwerpen ophalen
    public function index()
    {
        $topics = Topic::latest()->get();

        return view('forum.index', compact('topics'));
    }

    // Een onderwerp bekijken
    public function show($id)
    {
        $topic = Topic::with('replies')->findOrFail($id);

        return view('forum.show', compact('topic'));
    }

    // Pagina voor nieuw onderwerp
    public function create()
    {
        return view('forum.create');
    }

    // Nieuw onderwerp opslaan
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required'
        ]);

        Topic::create($request->all());

        return redirect('/');
    }

    // Reactie plaatsen
    public function reply(Request $request, $id)
    {
        $request->validate([
            'author' => 'required',
            'content' => 'required'
        ]);

        Topic::findOrFail($id)->replies()->create([
            'author' => $request->author,
            'content' => $request->content
        ]);

        return redirect('/topic/' . $id);
    }
}