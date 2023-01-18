<header>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a href="../../index.html" class="navbar-item">
                <img src="<?= BASE_PATH ?>images/engielogo.png" width="100" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Maak een afspraak
                </a>

                <a class="navbar-item">
                    Product en advies
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Zie onze werkgevers
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Bouwvakkers
                        </a>
                        <a class="navbar-item">
                            Electriciens
                        </a>
                        <a class="navbar-item">
                            Kantoor
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-black">
                        <strong><a href="logout">Log uit</a></strong>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="hero is-medium afspraak-image ">
        <div class="hero-body text">
            <p  class="title has-text-white has-background-primary is-2 pt-2">
                Alle klantenafspraken:
            </p>
        </div>


        <div class="container subtitle has-text-black">
            <?php if (isset($error)): ?>
                <span class="error"><?= $error; ?></span>
            <?php endif; ?>

            <?php if (isset($contactgevers) && isset($totalContactgevers)): ?>
                <table>
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Telefoonnummer</th>
                        <th>Woonplaats</th>
                        <th>Reden</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td colspan="3">Totaal: <?= $totalContactgevers; ?></td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach($contactgevers as $contactgever): ?>
                        <tr>
                            <td><?= $contactgever->naam;?></td>
                            <td><?= $contactgever->email;?></td>
                            <td><?= $contactgever->telefoonnummer;?></td>
                            <td><?= $contactgever->woonplaats;?></td>
                            <td><?= $contactgever->reden;?></td>
                            <td class="is-vcentered"><a href="<?= BASE_PATH; ?>edit?id=<?= $contactgever->id; ?>">Wijzig</a></td>
                            <td class="is-vcentered"><a href="<?= BASE_PATH; ?>delete?id=<?= $contactgever->id; ?>">Verwijder</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </section>
</main>
<footer>
    <section class="hero has-background-dark ">
        <div class="hero-body footerdownbelow">
            <p class="title has-text-white ">
                Klantenservice
            </p>
        </div>

    </section>
</footer>
