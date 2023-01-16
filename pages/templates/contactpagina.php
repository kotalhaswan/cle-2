<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="./css/style.css">-->
<!--    <title>CONTACT | EQUANS website</title>-->
<!--</head>-->
<!--<body>-->
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

    <section class="hero is-medium contact-image ">
        <div class="hero-body text">
            <p  class="title has-text-primary is-2 pt-2">
                Contactpagina
            </p>
        </div>
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
        <div class="container subtitle has-text-black">
            <form class="column is-6" action="" method="post" enctype="multipart/form-data">

                <?php if (isset($contact)): ?>
                <label for="naam">Naam</label>
                <input type="text" id="naam" name="naam" placeholder="Uw volledige naam..."  value="<?=$contact->naam?>">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Uw email.."  value="<?= $contact->email ?>">

                <label for="telefoon">Telefoonnummer</label>
                <input type="text" id="telefoonnummer" name="telefoonnummer" placeholder="Uw telefoonnummer.."  value="<?=$contact->telefoonnummer ?>">

                <label for="woonplaats">Woonplaats</label>
                <input type="text" id="woonplaats" name="woonplaats" placeholder="Uw woonplaats.."  value="<?= $contact->woonplaats ?>">

                <label for="reden">Reden voor contact</label>
                <select id="reden" name="reden">
                    <option value="<?= $contact->reden ?>">Ik wil een project bespreken</option>
                    <option value="<?= $contact->reden ?>">Ik wil graag solliciteren</option>
                    <option value="<?= $contact->reden ?>">Andere reden (graag hieronder invullen!)</option>
                </select>

                <label for="reden"></label>
                <textarea id="reden" name="reden" placeholder="Andere reden indien u deze optie hebt geselecteerd" style="height:200px"></textarea>
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <button class="button is-primary is-fullwidth" type="submit" name="submit">Save</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <?php endif; ?>
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