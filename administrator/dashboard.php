<?php
include_once './controllers/AuthController.php';

$auth = new AuthController($connect);
$akses = $auth->getacces();

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Upload Berita</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS Kustom -->
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    /* Sidebar Lebar */
.sidebar {
    width: 250px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* Wrapper Utama */
.wrapper {
    min-height: 100vh;
    background-color: #f8f9fa;
}

/* Responsif: Sidebar jadi compact di mobile */
@media (max-width: 768px) {
    .sidebar {
        width: 80px;
        overflow: hidden;
    }
    .sidebar .nav-link span, 
    .sidebar h4 {
        display: none;
    }
    .sidebar .nav-link {
        text-align: center;
        padding: 10px 5px;
    }
    .sidebar .nav-link i {
        margin-right: 0;
        font-size: 1.2rem;
    }
}

/* Efek hover menu */
.nav-link {
    border-radius: 5px;
    margin-bottom: 5px;
    transition: all 0.2s;
}
.nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
}
.nav-link.active {
    background-color: #0d6efd;
}

/* Card Form */
.card {
    border: none;
    border-radius: 10px;
}
</style>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-dark text-white p-3">
            <h4 class="text-center mb-4">Admin Panel</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=home">
                        <i class="fas fa-newspaper me-2"></i> Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-upload me-2"></i> Upload Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog me-2"></i> Pengaturan
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <a class="nav-link text-danger" href="?page=logout">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-grow-1 p-4">
            <header class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="fas fa-upload me-2"></i> Upload Berita</h2>
                <?php
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i> Admin
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                    </ul>
                </div>
            </header>

            <!-- Form Upload Berita -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Berita</label>
                            <input type="text" class="form-control" id="judul" placeholder="Masukkan judul berita">
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" id="kategori">
                                <option selected>Pilih kategori</option>
                                <option value="politik">Politik</option>
                                <option value="olahraga">Olahraga</option>
                                <option value="teknologi">Teknologi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Utama</label>
                            <input class="form-control" type="file" id="gambar">
                        </div>
                        <div class="mb-3">
                            <label for="konten" class="form-label">Isi Berita</label>
                            <textarea class="form-control" id="konten" rows="8" placeholder="Tulis konten berita di sini..."></textarea>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Publish Berita</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Daftar Berita Terakhir (Opsional) -->
            <div class="card shadow-sm mt-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="fas fa-history me-2"></i> Berita Terakhir</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pemilihan Presiden 2024</td>
                                    <td><span class="badge bg-info">Politik</span></td>
                                    <td>10 Jun 2024</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Final Piala Dunia 2026</td>
                                    <td><span class="badge bg-success">Olahraga</span></td>
                                    <td>5 Jun 2024</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS Kustom (Opsional) -->
    <script src="js/script.js"></script>
</body>
</html>