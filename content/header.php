<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>

<header style="position: relative;z-index: 20;">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="padding:0px;padding-right: 20px;min-height: 60px;">
        <button style="cursor:pointer;" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="color:#fff2e9">
                <li class="nav-item <?php echo ($page == "home" && $view == "dashboard") ? "active" : "" ?>">
                    <a class="nav-link" href="<?php echo _SITE_BASE; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if ($user != null) { ?>

                    <?php if (get_user_type($user["categorie"], "users") < 2) { ?>

                        <li class="nav-item <?php echo $page == "users" ? "active" : "" ?>">
                            <a class="nav-link" href="<?php getUrl("users", "dashboard", true); ?>">Users <span class="sr-only">(current)</span></a>
                        </li>

                        <?php
                    }
                    if (get_user_type($user["categorie"], "users") <= 2) {
                        ?>
                        <li class="nav-item <?php echo $page == "detalii" ? "active" : "" ?>">
                            <a class="nav-link" href="<?php getUrl("detalii", "admin", true); ?>">Detalii</a>
                        </li>
                        <li class="nav-item <?php echo $page == "participanti" ? "active" : "" ?>">
                            <a class="nav-link" href="<?php getUrl("participanti", "dashboard", true); ?>">Participanti</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item <?php echo $page == "detalii" ? "active" : "" ?>">
                            <a class="nav-link" href="<?php getUrl("detalii", "dashboard", true); ?>">Detalii</a>
                        </li>
                        <?php
                    }
                } else {
                    ?>
                    <li class="nav-item <?php echo $view == "about" ? "active" : "" ?>">
                        <a class="nav-link" href="<?php getUrl("home", "about", true); ?>">About</a>
                    </li>
                        <li class="nav-item <?php echo $view == "partners" ? "active" : "" ?>">
                            <a class="nav-link" href="<?php getUrl("home", "partners", true); ?>">Partners</a>
                        </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ml-auto">

                <?php if ($user != null) {
                    ?>
                    <li class="nav-item" style="padding: 7px;">
                        <?php
                        echo $user["nume"] . " " . $user["prenume"];
                        ?>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Optiuni</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php getUrl("home", "about", true); ?>">About</a>
                            <a class="dropdown-item" href="<?php getUrl("home", "faq", true); ?>">FAQ</a>
                            <a class="dropdown-item" href="<?php getUrl("home", "contact", true); ?>">Contact</a>
                            <a class="dropdown-item" href="<?php getUrl("home", "partners", true); ?>">Partners</a>
                            <a class="dropdown-item" href="<?php getUrl("users", "edit", true); ?>">Editeaza profilul</a>
                            <a class="dropdown-item" href="<?php getUrl("login", "logout", true); ?>">Deconectare</a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item <?php echo $view == "faq" ? "active" : "" ?>">
                        <a class="nav-link" href="<?php getUrl("home", "faq", true); ?>">FAQ</a>
                    </li>
                    <li class="nav-item <?php echo $view == "contact" ? "active" : "" ?>">
                        <a class="nav-link" href="<?php getUrl("home", "contact", true); ?>">Contact</a>
                    </li>
                    <?php if (true) { ?>
                        <li class="nav-item <?php echo $view == "login" ? "active" : "" ?>">
                            <a class="nav-link" href="<?php getUrl("login", "login", true); ?>">Login</a>
                        </li>
                    <?php } ?>          <?php } ?>
            </ul>
        </div>
    </nav>
    <div class="linie_separatoare"></div>
</header>