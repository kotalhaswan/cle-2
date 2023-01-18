<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (isset($contactgever)): ?>
    <h1 class="title mt-4">Weet je zeker dat je <?= $contactgever->naam; ?> wilt verwijderen?</h1>
    <a class="button is-danger mt-4" href="<?= BASE_PATH; ?>delete?id=<?= $contactgever->id; ?>&continue">Ja, verwijder!</a>
    <a class="button mt-4" href="<?= BASE_PATH; ?>adminpagina">Terug naar lijst</a>
<?php endif; ?>

