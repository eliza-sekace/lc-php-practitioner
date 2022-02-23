<?php require('views/partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
    <li> <?= $user->name; ?></li>
<?php endforeach; ?>

    <h1> Submit Your Name</h1>

    <form method="POST" action="/names">
        <input name="name"></input>
        <!--    bez shii nesubmitos atbildi-->
        <button type="submit">Submit</button>

    </form>

<?php require('views/partials/footer.php'); ?>