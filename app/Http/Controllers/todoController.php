<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class TodoController extends Controller
{
    /**
     * DAFTAR TODO.
     */
    public function index()
    {
        $todos = Todo::latest()->paginate(12);
        return view('todo.index', compact('todos'));
    }

    /**
     * MENAMPILKAN FORM TAMBAH TODO.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * MENYIMPAN TODO BARU.
     */
    public function store(Request $request)
    {
      

        $validated = $request->validate([
            
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'is_completed' => 'nullable|boolean',
            
        ]);

        $validated['user_id'] = auth()->user()->id;
        Todo::create($validated);

        Alert::toast('Berhasil membuat task baru!', 'success')->autoClose(5000);
        return redirect()->route('todo.index');
    }

// complate
    public function toggle(Todo $todo)
{
    $todo->is_completed = !$todo->is_completed;  
    $todo->save();

    return redirect()->route('todo.index')->with('success', 'Status todo telah diperbarui!');
}

    /**
     * MENAMPILKAN FORM EDIT TODO.
     */
    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    /**
     * UPDATE TODO.
     */
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'is_completed' => 'nullable|boolean',
        ]);

        $todo->update($validated);

        Alert::toast('Berhasil edit task!', 'success')->autoClose(5000);
        return redirect()->route('todo.index');
    }

    /**
     * HAPUS TODO.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todo.index')->with('success', 'Todo berhasil dihapus!');
    }
}