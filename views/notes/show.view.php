<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1>Hello wellcome to <?= $header ?> page</h1>
      <p class=""margin-botom-6>
        <a href="/notes" class ="text-blue-500 underline"> go back .. </a>
      </p>
      <p>
          <?= htmlspecialchars($note['body']) ?>           
      </p>
    </div>
  </main>
</div>

<?php require base_path('views/partials/footer.view.php') ?>