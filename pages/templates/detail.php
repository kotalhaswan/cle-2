<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (isset($werkgever)): ?>
    <h1 class="title mt-4"><?= $werkgever->naam; ?></h1>

    <section class="content">
        <ul>
            <li>Telefoonnummer: <?= $werkgever->telefoonnummer; ?></li>
            <li>Email: <?= $werkgever->email; ?></li>
        </ul>
    </section>
    <a class="button mt-4" href="<?= BASE_PATH; ?>afspraakpagina">Go back to the list</a>
<?php endif; ?>
