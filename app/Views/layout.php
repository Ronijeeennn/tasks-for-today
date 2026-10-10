<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= esc($title) ?> | Tasks for Today</title>
<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
<header class="nav">
  <div class="wrap">
    <a class="brand" href="<?= site_url('/') ?>">&#9989; Tasks for Today</a>
    <nav>
      <?php
      $links = ['home' => ['/', 'Welcome'], 'tasks' => ['tasks', 'Task List'], 'profile' => ['profile', 'Profile'], 'about' => ['about', 'About']];
      foreach ($links as $key => [$path, $label]): ?>
        <a href="<?= site_url($path) ?>" class="<?= $active === $key ? 'active' : '' ?>"><?= $label ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>
<main class="wrap">
<?= $this->renderSection('content') ?>
</main>
<footer class="foot">&copy; <?= date('Y') ?> Tasks for Today Management System &middot; IT0049 &middot; Built with CodeIgniter 4</footer>
</body>
</html>
