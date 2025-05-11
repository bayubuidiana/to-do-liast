<x-layout>
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4" style="color: #d35400;">Tambah Todo Baru</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('todo.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                       id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Deskripsi</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="due_date" class="form-label fw-bold">Deadline</label>
                                <input type="datetime-local" class="form-control @error('due_date') is-invalid @enderror" 
                                       id="due_date" name="due_date" value="{{ old('due_date') }}" required>
                                @error('due_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_completed" name="is_completed">
                                <label class="form-check-label" for="is_completed">Tandai sebagai selesai</label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('todo.index') }}" class="btn btn-outline-secondary">Kembali</a>
                                <button type="submit" class="btn btn-orange">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>