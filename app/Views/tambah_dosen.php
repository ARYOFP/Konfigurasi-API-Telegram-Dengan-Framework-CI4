<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --background-color: #f8f9fa;
            --text-color: #343a40;
            --card-background: #ffffff;
            --card-border-radius: 15px;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            font-family: 'Arial', sans-serif;
        }

        .content-wrapper {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .navbar {
            background-color: var(--primary-color) !important;
        }

        .sidebar-dark-primary .brand-link {
            background-color: var(--primary-color);
            color: #ffffff !important;
        }

        .nav-sidebar .nav-link.active {
            background-color: var(--secondary-color) !important;
        }

        .main-header .nav-link {
            color: #ffffff !important;
        }

        .main-header .nav-link:hover {
            color: #ced4da !important;
        }

        .table {
            background-color: var(--card-background);
            color: var(--text-color);
        }

        .thead-dark th {
            background-color: var(--primary-color);
            color: #ffffff;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: #ffffff;
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .btn-danger {
            background-color: #dc3545;
            color: #ffffff;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .card {
            background-color: var(--card-background);
            border-radius: var(--card-border-radius);
            box-shadow: var(--card-shadow);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .form-control {
            background-color: #ffffff;
            color: var(--text-color);
        }

        .form-control::placeholder {
            color: #6c757d;
        }

        .form-control:focus {
            background-color: #ffffff;
            color: var(--text-color);
            border-color: var(--primary-color);
        }

        .alert-success {
            background-color: #28a745;
            border-color: #28a745;
            color: #ffffff;
        }

        .card-header {
            background-color: var(--primary-color);
            border-bottom: 1px solid var(--secondary-color);
            color: #ffffff;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" class="brand-link">
                <span class="brand-text font-weight-light">Input Dosen</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Form Tambah Dosen</h3>
                                </div>
                                <div class="card-body">
                                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                                        <div class="alert alert-success">
                                            <?php echo session()->getFlashdata('message'); ?>
                                        </div>
                                    <?php endif ?>

                                    <!-- Form Tambah Data Dosen -->
                                    <form action="/tambah-data-dosen" method="post">
                                        <div class="form-group">
                                            <label for="nama_dosen">Nama Dosen:</label>
                                            <input type="text" name="Nama_Dosen" id="Nama_Dosen" class="form-control" placeholder="Masukkan Nama Dosen" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_matkul">Mata Kuliah:</label>
                                            <input type="text" name="Matakuiah" id="Matakuiah" class="form-control" placeholder="Masukkan Nama Mata Kuliah" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Dosen</button>
                                        <a href="/dosen" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS, and AdminLTE JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function() {
            if (localStorage.getItem('bgColor')) {
                var bgColor = localStorage.getItem('bgColor');
                document.documentElement.style.setProperty('--background-color', bgColor);
                $(".navbar, .sidebar-dark-primary, .content-wrapper").css("background-color", bgColor);
            }

            if (localStorage.getItem('textColor')) {
                var textColor = localStorage.getItem('textColor');
                document.documentElement.style.setProperty('--text-color', textColor);
                $("body, .navbar, .sidebar-dark-primary").css("color", textColor);
            }
        });
    </script>
</body>

</html>
