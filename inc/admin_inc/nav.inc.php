    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">

                    <li class="nav-item mb-3">
                        <a class="nav-link d-flex align-items-center" aria-current="page" href="<?= URL ?>profil.php">
                            <i class="bi bi-emoji-sunglasses-fill icone-back"></i>&nbsp;&nbsp;
                            <?= $_SESSION['user']['prenom'] . '&nbsp;' . $_SESSION['user']['nom'] ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL ?>admin/gestion_boutique.php?action=affichage">
                            <i class="bi bi-shop"></i>
                            Shop
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL ?>admin/gestion_boutique.php?action=ajout">
                            <i class="bi bi-bag-plus-fill"></i>
                            Nouvel article
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>admin/gestion_user.php">
                            <i class="bi bi-people-fill"></i>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>admin/gestion_commande.php">
                            <i class="bi bi-basket-fill"></i>
                            Commandes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>admin/gestion_boutique.php">
                            <i class="bi bi-exclamation-triangle"></i>
                            Informations stock
                        </a>
                    </li>
                </ul>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">