<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --background-color: #f8f9fa;
            --text-color: #343a40;
            --card-background: #ffffff;
            --card-border: 1px solid #ced4da;
            --card-border-radius: 10px;
            --card-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --hover-color: #0056b3;
            --alert-bg: rgba(0, 123, 255, 0.1);
            --alert-border: #007bff;
            --btn-bg: #007bff;
            --btn-hover-bg: #0056b3;
            --header-icon-color: #007bff;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        .card {
            background-color: var(--card-background);
            border: var(--card-border);
            border-radius: var(--card-border-radius);
            box-shadow: var(--card-shadow);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .alert {
            background-color: var(--alert-bg);
            border-left: 5px solid var(--alert-border);
        }

        .btn-custom {
            background-color: var(--btn-bg);
            color: white;
            border-radius: 20px;
        }

        .btn-custom:hover {
            background-color: var(--btn-hover-bg);
        }

        h3 {
            color: var(--primary-color);
        }

        .header-icon {
            font-size: 2rem;
            color: var(--header-icon-color);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <i class="fas fa-bell header-icon"></i>
                <h3 class="ml-3">Notifikasi</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h4 class="alert-heading">Pesan Terkirim!</h4>
                    <p><?= $message; ?></p>
                </div>
                <a href="/dosen" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Kembali ke Data Dosen</a>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Set background and text color from localStorage
            if (localStorage.getItem('bgColor')) {
                var bgColor = localStorage.getItem('bgColor');
                document.documentElement.style.setProperty('--background-color', bgColor);
                $("body").css("background-color", bgColor);
                $(".card").css("background-color", "var(--card-background)");
            }

            if (localStorage.getItem('textColor')) {
                var textColor = localStorage.getItem('textColor');
                document.documentElement.style.setProperty('--text-color', textColor);
                $("body, .card").css("color", textColor);
            }
        });
    </script>
</body>

</html>
