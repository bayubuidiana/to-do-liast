<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3 class="text-center fw-bold" style="color: #d35400;">Daftar Akun</h3>
                        <p class="text-center">Silakan isi form di bawah untuk membuat akun baru</p>

                        <form action="/login" method="POST">
                            @csrf
                            <!-- Input Nama -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan nama lengkap" required>
                            </div>

                            <!-- Input Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukkan email" required>
                            </div>

                            <!-- Input Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan password" required>
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Konfirmasi password" required>
                            </div>

                            <!-- Tombol Daftar -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark px-4 py-2 fw-bold">Daftar</button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <p>Sudah punya akun? <a href="/login" class="text-decoration-none"
                                    style="color: #d35400;">Login sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
