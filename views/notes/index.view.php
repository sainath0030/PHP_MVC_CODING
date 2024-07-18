<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1>Hello wellcome to <?= $heading ?> page</h1>
      <ul>
        <?php foreach($notes as $note): ?>
          <li>
            <a href="/note?id=<?= $note['id'] ?>"  class="text-blue-500 hover:underline" >
              <?= htmlspecialchars($note['body']) ?>
            </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <footer class="mt-6">
        <p>
          <a href="/notes/create" class="text-green-500  border border-current px-3 py-2 rounded"> Create Note</a>
        </p>
      </footer>    
      
    </div>
  </main>
</div>

<?php require base_path('views/partials/footer.php') ?>