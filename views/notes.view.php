<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>
<?php include "partials/banner.php"; ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1>Hello wellcome to <?= $header ?> page</h1>
      <p>
        <?php foreach($notes as $note): ?>
          <li>
            <a href="/note?id=<?= $note['id'] ?>"  class="" >
              <?= $note['body'] ?>
            </a>
        </li>
        <?php endforeach; ?>
      </p>
    </div>
  </main>
</div>

<?php include "partials/footer.view.php" ?>