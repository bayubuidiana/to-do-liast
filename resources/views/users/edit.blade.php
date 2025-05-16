<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3 class="text-center fw-bold" style="color: #d35400;">Edit Akun</h3>
                        <p class="text-center">Silakan ubah data akun sesuai kebutuhan</p>

                        <form action="{{ route('users.update', $user->id) }}" method="POST" novalidate>
                            @csrf
                            @method('PUT')

                            <!-- Input Nama -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan nama lengkap" value="{{ old('name', $user->name) }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Input Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukkan email" value="{{ old('email', $user->email) }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Input Password (Kosongkan jika tidak ingin ganti password) -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password <small>(Kosongkan jika tidak diganti)</small></label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan password baru">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Konfirmasi password baru">
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol Simpan dan Kembali -->
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-dark px-4 py-2 fw-bold">Simpan</button>
                                <a href="{{ route('users.index') }}" class="btn btn-dark px-4 py-2 fw-bold">Kembali</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
