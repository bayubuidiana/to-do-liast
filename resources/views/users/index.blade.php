<x-layout>
    <div class="container my-4 p-4 shadow-sm bg-white rounded">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-orange">Data Users</h2>
            <a href="{{ route('users.create') }}" class="btn btn-dark btn-sm">+ Add New User</a>
        </div>

        {{-- Notifikasi Sukses --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Form Pencarian --}}
        <form method="GET" action="{{ route('users.index') }}" class="row g-2 justify-content-end mb-4">
            <div class="col-auto">
                <input name="search" type="search" value="{{ request('search') }}" class="form-control"
                    placeholder="Search by name...">
            </div>
            <div class="col-auto">
                <button class="btn btn-dark btn-sm">Search</button>
            </div>
        </form>

        {{-- Tabel Data --}}
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 30%">Name</th>
                        <th style="width: 30%">Email</th>
                        <th style="width: 20%">Status</th>
                        <th style="width: 15%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $key => $user)
                        <tr>
                            <td>{{ $key + $users->firstItem() }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @php $isActive = $user->todos->count() > 0; @endphp
                                <span class="badge {{ $isActive ? 'bg-success' : 'bg-danger' }}">
                                    {{ $isActive ? 'Aktif' : 'Tidak Aktif' }}
                                </span>
                            </td>
                            <td class="d-flex ">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                
                                <button class="btn btn-sm btn-danger" onclick="confirmDeleteUser({{ $user->id }})">
                                    Delete
                                </button>
                                
                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $users->withQueryString()->links() }}
        </div>
    </div>
</x-layout>
