<nav class="navbar navbar-expand-lg text-white" style="background-color: #02332E">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo_portfolio.png" alt="Logo de mon portfolio" width="100" height="37">
        </a>
        <!-- gestion du menu pour les smartphones-->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-btssio">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- fin gestion menu smartphone-->

        <!-- Fonctionnalité de la barre de navigation-->
        <div class="collapse navbar-collapse justify-content-end" id="menu-btssio">
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a class="nav-link" href="index.php?uc=aboutme"> A Propos de moi</a>
                </li>
            </ul>

            <ul class='navbar-nav'>
                <li class="nav-item dropdown" width="150">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown">Compétences Professionnelles</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#ap">Ateliers Professionnels</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=competences&action=certif">Certification</a></li>
                        <li><a class="dropdown-item" href="#stages">Stages</a></li>
                        <li><a class="dropdown-item" href="#tableau">Tableau de Synthèse</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a class="nav-link" href="index.php?uc=veille"> Veille Technologique</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a class="nav-link" href="#contact"> Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>