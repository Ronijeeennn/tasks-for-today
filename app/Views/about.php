<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero"><h1>About the Developer</h1><p>The person behind this system.</p></section>
<section class="card">
  <h2><?= esc($dev->name) ?></h2>
  <p><?= esc($dev->about) ?></p>
  <dl class="profile">
    <dt>Course</dt><dd><?= esc($dev->course) ?></dd>
    <dt>School</dt><dd><?= esc($dev->school) ?></dd>
    <dt>Email</dt><dd><?= esc($dev->email) ?></dd>
    <dt>GitHub</dt><dd><a href="<?= esc($dev->github, 'url') ?>" target="_blank" rel="noopener"><?= esc($dev->github) ?></a></dd>
    <dt>Tech Stack</dt><dd>CodeIgniter 4, PHP, MySQL, HTML, CSS</dd>
  </dl>
</section>
<?= $this->endSection() ?>
