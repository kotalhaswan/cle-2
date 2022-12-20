<?php require_once 'initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>AFSPRAAK | EQUANS website</title>
</head>
<body>
<header>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a href="index.html" class="navbar-item">
                <img src="images/engielogo.png" width="100" height="28">
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
                        <strong>Inloggen MijnEngie</strong>
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
                Zoek uw ideale werknemer voor uw afspraak:
            </p>
        </div>


    <div class="container subtitle has-text-black">
        <?php if (isset($error)): ?>
            <span class="error"><?= $error; ?></span>
        <?php endif; ?>

        <?php if (isset($werkgevers) && isset($totalWerkgevers)): ?>
            <table>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Telefoonnummer</th>
                    <th>Vakgebied</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="3">Totaal: <?= $totalWerkgevers; ?></td>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach($werkgevers as $werkgever): ?>
                    <tr>
                        <td><?= $werkgever->naam;?></td>
                        <td><?= $werkgever->email;?></td>
                        <td><?= $werkgever->telefoonnummer;?></td>
                        <td><?= $werkgever->vakgebied;?></td>
                        <td><a href="contactpagina.html">Maak afspraak</a></td>
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
</body>
</html>