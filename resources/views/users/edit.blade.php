<x-layout>
    <h2>Edit User</h2>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-2" required>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control mb-2" required>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</x-layout>
