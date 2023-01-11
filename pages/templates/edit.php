<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (isset($success)): ?>
    <p class="notification is-primary"><?= $success; ?></p>
<?php endif; ?>

<?php if (isset($contact)): ?>
    <h1 class="title mt-4">Edit <em><?= $contact->naam; ?></em></h1>
    <section class="columns">
        <form class="column is-6" action="" method="post" enctype="multipart/form-data">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="name">Naam</label>
                </div>
                <div class="field-body">
                    <input class="input" id="name" type="text" name="name" value="<?= $contact->naam; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="email">Email</label>
                </div>
                <div class="field-body">
                    <input class="input" id="email" type="text" name="email" value="<?= $contact->email; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="telefoonnummer">Telefoonnummer</label>
                </div>
                <div class="field-body">
                    <input class="input" id="telefoonnummer" type="text" name="telefoonnummer" value="<?= $contact->telefoonnummer; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="woonplaats">Woonplaats</label>
                </div>
                <div class="field-body">
                    <input class="input" id="woonplaats" type="text" name="woonplaats" value="<?= $contact->woonplaats; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="Reden">Reden</label>
                </div>
                <div class="field-body">
                    <input class="input" id="Reden" type="text" name="Reden" value="<?= $contact->reden; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                    <button class="button is-primary is-fullwidth" type="submit" name="submit">Save</button>
                </div>
            </div>
        </form>
    </section>
<?php endif; ?>
<a class="button" href="<?= BASE_PATH; ?>home">&laquo; Go back to the list</a>
