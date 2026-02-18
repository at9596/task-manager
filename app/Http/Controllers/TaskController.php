<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = auth()->user()->tasks()->latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This tells Laravel to load resources/views/tasks/create.blade.php
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'due_date' => 'nullable|date',
        'priority' => 'required'
    ]);

    auth()->user()->tasks()->create($request->all());

    return redirect()->route('tasks.index')
        ->with('success', 'Task created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    public function update(Request $request, Task $task)
    {
        $this->authorize('update', $task);

        $task->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Task updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
