<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporAPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling Navbar */
        .navbar {
            background-color: white !important;
        }

        .navbar-brand {
            color: black !important;
            font-weight: bold;
        }

        .nav-link {
            color: black !important;
            font-weight: normal;
            margin: 0 10px;
        }

        .nav-link.active {
            font-weight: bold;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        /* Admin login icon */
        .admin-login-icon {
            width: 24px;
            height: 24px;
            filter: invert(0%);
        }

        .admin-login-icon:hover {
            filter: invert(50%);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Ujung kiri: Brand -->
        <a class="navbar-brand" href="/admin">
            <img src="{{ asset('images/silapor_logo.png') }}" alt="LaporAPP Logo" style="height: 80px;"> <!-- Ganti ukuran logo -->
        </a>

        <!-- Menu Tengah -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin">Beranda</a>
                </li>

                <!-- Tampilkan tombol Logout jika sudah login -->
                @auth
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">Logout</button>
                        </form>
                    </li>
                @else
                    <!-- Tampilkan tombol Login jika belum login -->
                    <a class="nav-link" href="/admin/login">
                        <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Login Admin" class="admin-login-icon">
                    </a>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Menentukan link aktif berdasarkan URL saat ini
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
</script>
</body>
</html>
