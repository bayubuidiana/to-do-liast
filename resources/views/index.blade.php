<x-layout>
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Kolom kiri untuk teks -->
            <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                <h1 class="fw-bold text-center" style="color: #d35400;">Selamat Datang di TO-DO LIST</h1>
                <p class="lead text-center">Atur harimu dengan rapi dan efisien. Tambahkan, edit, dan kelola aktivitasmu
                    di satu tempat.</p>
                <a href="/todo" class="btn btn-orange px-4 py-2 fw-bold mt-3" style="margin-left: 200px;">Mulai
                    Sekarang</a>
            </div>

            <!-- Kolom kanan untuk gambar -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('image/todolist.png') }}" alt="Tes Gambar" class="img-fluid">
            </div>
        </div>
    </div>

        @if (session('success'))
        <!-- SweetAlert2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
</x-layout>
