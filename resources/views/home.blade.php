<x-layout>
    <main class="container py-5" style="min-height: 80vh;">
        <!-- Hero Section -->
        <section class="row align-items-center mb-5 g-4">
            <div class="col-lg-6 text-center text-lg-start order-lg-1 order-2">
                <h1 class="fw-bold mb-3 display-4" style="color: #e67e22;">
                    Halo, {{ Auth::user()->name }} <span class="wave-emoji">👋</span>
                </h1>
                <p class="lead mb-4 fs-5 text-muted">
                    Selamat datang kembali! Kelola semua aktivitasmu dengan lebih mudah dan efisien di TO-DO LIST.
                </p>
                <div class="d-flex gap-3">
                    <a href="/todo" class="btn-orange px-4 py-3 text-decoration-none fw-bold rounded-pill">
                        Lihat To-Do List <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="/todo/create" class="btn btn-outline-orange px-4 py-3 fw-bold rounded-pill">
                        Buat Baru <i class="bi bi-plus-lg ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center order-lg-2 order-1">
                <img src="{{ asset('image/a_cartoon_style_il_image_.png') }}" alt="Productivity Illustration"
                    class="img-fluid floating-animation"
                    style="max-height: 320px; 
            filter: drop-shadow(0 10px 15px rgba(230, 126, 34, 0.2)); 
            border-radius: 15px; 
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 10px;">
            </div>
        </section>

        <!-- Features Section -->
        <section class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 hover-shadow transition-all"
                    style="background: linear-gradient(135deg, #f39c12, #f1c40f); color: white;">
                    <div class="card-body p-4 text-center">
                        <div class="icon-wrapper mb-3 bg-white rounded-circle d-inline-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px; color: #f39c12;">
                            <i class="bi bi-plus-lg fs-4"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Tambah Aktivitas</h5>
                        <p class="card-text mb-0">Buat daftar tugas harianmu agar tidak ada yang terlewat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 hover-shadow transition-all"
                    style="background: linear-gradient(135deg, #e67e22, #f39c12); color: white;">
                    <div class="card-body p-4 text-center">
                        <div class="icon-wrapper mb-3 bg-white rounded-circle d-inline-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px; color: #e67e22;">
                            <i class="bi bi-pencil-square fs-4"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Kelola Tugas</h5>
                        <p class="card-text mb-0">Edit, centang, atau hapus tugas sesuai kebutuhanmu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 hover-shadow transition-all"
                    style="background: linear-gradient(135deg, #d35400, #e67e22); color: white;">
                    <div class="card-body p-4 text-center">
                        <div class="icon-wrapper mb-3 bg-white rounded-circle d-inline-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px; color: #d35400;">
                            <i class="bi bi-graph-up fs-4"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Produktif Setiap Hari</h5>
                        <p class="card-text mb-0">Bangun kebiasaan baik dan capai target harianmu.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Stats Section -->
        <section class="bg-light rounded-4 p-4 mb-5">
            <h5 class="fw-bold mb-4 text-center text-md-start">
                <i class="bi bi-speedometer2 me-2"></i> Ringkasan Produktivitas
            </h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="p-3 bg-white rounded-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                                <i class="bi bi-list-check text-primary"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">Total Tugas</h6>
                                <p class="mb-0 text-muted small">15 aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white rounded-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 p-2 rounded me-3">
                                <i class="bi bi-check-circle text-success"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">Terselesaikan</h6>
                                <p class="mb-0 text-muted small">9 hari ini</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white rounded-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-10 p-2 rounded me-3">
                                <i class="bi bi-clock text-warning"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">Dalam Proses</h6>
                                <p class="mb-0 text-muted small">6 tugas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <style>
        .hover-shadow {
            transition: all 0.3s ease;
        }

        .hover-shadow:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .wave-emoji {
            animation: wave 2s infinite;
            display: inline-block;
            transform-origin: 70% 70%;
        }

        @keyframes wave {
            0% {
                transform: rotate(0deg);
            }

            10% {
                transform: rotate(-10deg);
            }

            20% {
                transform: rotate(12deg);
            }

            30% {
                transform: rotate(-10deg);
            }

            40% {
                transform: rotate(9deg);
            }

            50% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</x-layout>
