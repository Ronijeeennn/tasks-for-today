<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero">
  <h1>Welcome! &#128075;</h1>
  <p>Today is <strong><?= esc(date('l, F j, Y')) ?></strong>. Here are your tasks for today.</p>
</section>
<section class="card">
  <h2>Today's Tasks (<?= count($tasks) ?>)</h2>
  <?= $this->include('task_table') ?>
</section>
<?= $this->endSection() ?>
