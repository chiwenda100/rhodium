<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <!-- Navbar -->
    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('/about') ?>">About</a> |
        <a href="<?= base_url('/users') ?>">Users</a>
    </nav>

    <hr>

    <!-- Main Content -->
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date('Y') ?> My Website</p>
    </footer>

</body>
</html>
