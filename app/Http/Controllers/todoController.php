namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Menampilkan daftar Todo
    public function index()
    {
        $todos = Todo::latest()->paginate(10);
        return view('todo.index', compact('todos'));
    }

    // Menampilkan form tambah Todo
    public function create()
    {
        return view('todo.create');
    }

    // Menyimpan Todo baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Todo::create($validated);

        return redirect()->route('todo.index')->with('success', 'Todo berhasil ditambahkan!');
    }

    // Menampilkan form edit Todo
    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    // Mengupdate Todo
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $todo->update($validated);

        return redirect()->route('todo.index')->with('success', 'Todo berhasil diupdate!');
    }

    // Menghapus Todo
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todo.index')->with('success', 'Todo berhasil dihapus!');
    }
}