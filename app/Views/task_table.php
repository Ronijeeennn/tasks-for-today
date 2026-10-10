<?php if (empty($tasks)): ?>
  <p class="empty">No tasks found.</p>
<?php else: ?>
<div class="table-scroll">
<table>
  <thead><tr><th>#</th><th>Title</th><th>Status</th><th>Date</th></tr></thead>
  <tbody>
  <?php foreach ($tasks as $t): ?>
    <tr>
      <td><?= (int) $t['id'] ?></td>
      <td><?= esc($t['title']) ?></td>
      <td><span class="badge <?= esc($t['status']) ?>"><?= esc(ucfirst(str_replace('_', ' ', $t['status']))) ?></span></td>
      <td><?= esc(date('M d, Y', strtotime($t['task_date']))) ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>
<?php endif; ?>
