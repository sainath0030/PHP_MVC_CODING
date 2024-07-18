<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1>Hello wellcome to <?= $heading ?> page</h1>
      <p class=""margin-botom-6>
        <a href="/notes" class ="text-blue-500 underline"> go back .. </a>
      </p>
      <p>
          <?= htmlspecialchars($note['body']) ?>           
      </p>
      <footer class="mt-6">
          <a href="notes/edit?id=<?= $note['id'] ?>" class="text-gray-500 border border-current px-3 py-2 rounded">Edit</a>
      </footer>
      
      <form method="POST" class="mt-6">
        <input type="hidden" name="_method" value="DELETE" />
        <input type="hidden" name="id" value="<?= $note['id']?>" />
        <button class="text-sm text-red-500  border border-current px-3 py-2 rounded">Delete</button>
      </form>
    </div>
  </main>
</div>

<?php require base_path('views/partials/footer.php') ?>