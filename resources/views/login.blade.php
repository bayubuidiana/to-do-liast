<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3 class="text-center fw-bold" style="color: #d35400;">Login</h3>
                        <p class="text-center">Silakan masukkan akun Anda untuk masuk</p>

                        <form action="/" method="GET">
                            @csrf
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

                            <!-- Remember Me -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                                <label class="form-check-label" for="rememberMe">Ingat saya</label>
                            </div>

                            <!-- Tombol Login -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark px-4 py-2 fw-bold">Login</button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <p>Belum punya akun? <a href="/registrasi" class="text-decoration-none"
                                    style="color: #d35400;">Daftar sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
