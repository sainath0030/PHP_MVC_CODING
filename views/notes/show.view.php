<?php include "views/partials/header.php"; ?>
<?php include "views/partials/nav.php"; ?>
<?php include "views/partials/banner.php"; ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1>Hello wellcome to <?= $header ?> page</h1>
      <p class=""margin-botom-6>
        <a href="/notes" class ="text-blue-500 underline"> go back .. </a>
      </p>
      <p>
          <?= $note['body'] ?>           
      </p>
    </div>
  </main>
</div>

<?php include "views/partials/footer.view.php" ?>