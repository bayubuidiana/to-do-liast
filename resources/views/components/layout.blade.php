<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist App</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 script hanya sekali -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper (wajib untuk dropdown) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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

        .dropdown-item.text-orange:hover {
            background-color: #fceae3;
            color: #b84300;
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    <div class="navbar-custom py-3 shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <h3 class="text-orange mb-0 fw-bold">TO-DO LIST</h3>
            <div class="d-flex gap-3 align-items-center">
                {{-- for client --}}
                <a href="/" class="text-orange h5 text-decoration-none fw-bold">HOME</a>
                @guest
                    <a href="/registrasi" class="btn btn-orange fw-bold px-3">DAFTAR</a>
                    <a href="/login" class="btn btn-outline-orange fw-bold px-3">LOGIN</a>
                @endguest
                @auth
                    <a href="/todo" class="text-orange h5 text-decoration-none fw-bold">TO-DO</a>
                    <a href="/users" class="text-orange h5 text-decoration-none fw-bold">USER</a>
                    <div class="dropdown">
                        <button class="btn btn-outline-orange fw-bold px-3 dropdown-toggle" type="button" id="dropdownMenu2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li>
                                <button class="dropdown-item text-orange fw-bold" type="button">Profile</button>
                                <a href="#" class="dropdown-item text-orange fw-bold"
                                    onclick="confirmLogout()">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth

            </div>
        </div>
    </div>

    <main class="flex-fill">
        {{ $slot }}
    </main>

    <footer class="footer-custom">
        <p>2025© TO-DO LIST</p>
    </footer>

    @include('sweetalert::alert') <!-- Ini penting untuk alert biasa -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Logout!',
                text: "Are you sure you want to logout?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, logout!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        }
        function confirmDeleteTodo(id) {
        Swal.fire({
            title: 'Delete Task!',
            text: "Are you sure you want to delete this task?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
    </script>

    @include('sweetalert::alert')
</body>

</html>
