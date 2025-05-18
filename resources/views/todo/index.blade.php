<x-layout>
    <div class="container py-2">
        <div class="text-center mt-5">
            <a href="{{ route('todo.create') }}" class="btn btn-orange px-4 py-2 fw-bold">+ Tambah Todo Baru</a>
        </div>
        <h2 class="text-center fw-bold mb-4" style="color: #d35400;">Daftar Todo</h2>
         

        <div class="row g-4">
            @foreach ($todos as $todo)
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $todo->title }}</h5>
                            <p class="card-text">{{ $todo->description }}</p>
                            <p class="text-muted small">Deadline: {{ $todo->due_date ?? 'No Deadline' }}</p>

                            <div class="mb-3">
                                @if ($todo->is_completed)
                                    <span class="badge bg-success">Selesai</span>
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                @else
                                    <span class="badge bg-warning text-dark">Belum Selesai</span>
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-auto d-flex justify-content-between">
                                <form action="{{ route('todo.toggle', $todo->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-outline-success">
                                        @if ($todo->is_completed)
                                            Undo
                                        @else
                                            Done
                                        @endif
                                    </button>
                                </form>

                                <a href="{{ route('todo.edit', $todo->id) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <form id="delete-form-{{ $todo->id }}"
                                    action="{{ route('todo.destroy', $todo->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                                <button onclick="confirmDeleteTodo({{ $todo->id }})"
                                    class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-3"">
                {{ $todos->links('pagination::bootstrap-5') }}
        </div>
    </div>
</x-layout>
