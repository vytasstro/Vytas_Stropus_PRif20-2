<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index(): View
    {
        $conference = new Conference();

        return view('conferences.index', ['conferences' => $conference->all()]);
    }
    
    public function create(): View
    {
        return view('conferences.create');
    }
    
    public function show(int $id): View
    {
        return view('conferences.show', ['conference' => Conference::findOrFail($id)]);
    }
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:5|max:20',
            'content' => 'required|min:10',
            'address' => 'required|min:5',
            'date' => 'required|min:10'
        ]);

        $conference = new Conference();
        $conference -> title = $request -> input('title');
        $conference -> content = $request -> input('content');
        $conference -> date = $request -> input('date');
        $conference -> address = $request -> input('address');
        $conference -> save();

        session()->flash('status', 'Conference created!');

        return redirect()->route('conferences.index');
    }
    public function update(int $id, Request $request): RedirectResponse
    {
        
        $conference = Conference::findOrFail($id);
        $conference->update($request->all());
        return redirect()->route('conferences.show', ['conference' => $conference->id]);
    }
    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('conferences.edit', compact('conference'));
    }

    public function destroy($id)
    {
        $conference = (new Conference())->findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference was deleted');

        return redirect()->route('index');
    }
    
    public function any()
    {
        return $this->count() > 0;
    }
}
