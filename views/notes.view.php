<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>
<?php include "partials/banner.php"; ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1>Hello wellcome to <?= $header ?> page</h1>
      <ul>
        <?php foreach($notes as $note): ?>
          <li>
            <a href="/note?id=<?= $note['id'] ?>"  class="text-blue-500 hover:underline" >
              <?= $note['body'] ?>
            </a>
        </li>
        <?php endforeach; ?>
      </ul>

      <p>
        <a href="/notes/create" class="text-green-500 hover:underline"> Create Note</a>
      </p>
    </div>
  </main>
</div>

<?php include "partials/footer.view.php" ?>