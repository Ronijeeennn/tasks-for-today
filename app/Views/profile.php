<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero"><h1>Profile</h1><p>Demo user information.</p></section>
<section class="card">
<?php if (! $user): ?>
  <p class="empty">No user record found. Did you run the seeder?</p>
<?php else: ?>
  <dl class="profile">
    <dt>ID</dt><dd><?= (int) $user['id'] ?></dd>
    <dt>Username</dt><dd><?= esc($user['username']) ?></dd>
    <dt>Full Name</dt><dd><?= esc($user['full_name']) ?></dd>
    <dt>Email</dt><dd><?= esc($user['email']) ?></dd>
    <dt>Member Since</dt><dd><?= esc(date('F j, Y g:i A', strtotime($user['created_at']))) ?></dd>
  </dl>
<?php endif; ?>
</section>
<?= $this->endSection() ?>
