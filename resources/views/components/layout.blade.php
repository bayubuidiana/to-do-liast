<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist App</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 script hanya sekali -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your custom styles */
        .bg-purple {
            background-color: #ffffff;
        }

        .navbar-custom {
            background-color: #ffffff;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .text-orange {
            color: #d35400 !important;
        }

        .btn-outline-orange {
            color: #d35400;
            border: 2px solid #d35400;
            background-color: transparent;
        }

        .btn-outline-orange:hover {
            background-color: #d35400;
            color: white;
        }

        .btn-orange {
            background-color: #d35400;
            color: white;
            border: none;
        }

        .btn-orange:hover {
            background-color: #b84300;
            color: white;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 70px;
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa
        }

        .footer-custom {
            background: #ffffff;
            text-align: center;
            padding: 20px 0;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    <div class="navbar-custom py-3 shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <h3 class="text-orange mb-0 fw-bold">TO-DO LIST</h3>
            <div class="d-flex gap-3 align-items-center">
                <a href="/" class="text-orange h5 text-decoration-none fw-bold">HOME</a>
                <a href="/todo" class="text-orange h5 text-decoration-none fw-bold">TO-DO</a>
                <a href="/users" class="text-orange h5 text-decoration-none fw-bold">USER</a>
                <a href="/login" class="btn btn-outline-orange fw-bold px-3">LOGIN</a>
                <a href="/registrasi" class="btn btn-orange fw-bold px-3">DAFTAR</a>
            </div>
        </div>
    </div>

    <main class="flex-fill">
        {{ $slot }}
    </main>

    <footer class="footer-custom">
        <p>2025© TO-DO LIST</p>
    </footer>

    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Signed in successfully"
            });
        </script>
    @endif
</body>

</html>
