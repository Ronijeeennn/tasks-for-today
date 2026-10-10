<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero">
  <h1>Task List</h1>
  <p>Every task in the system, ordered by date.</p>
</section>
<section class="card">
  <h2>All Tasks (<?= count($tasks) ?>)</h2>
  <?= $this->include('task_table') ?>
</section>
<?= $this->endSection() ?>
