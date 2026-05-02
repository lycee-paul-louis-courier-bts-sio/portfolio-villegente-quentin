<link rel="stylesheet" href="./assets/css/accueil.css">
<div class="text-white" style="background-color: #082904">
    <div class="container">
        <div class="row">
            <div class="welcome-section">
                <h1>Quentin Villegente</h1>
                <h2 class="dynamic-text">
                    <span id="dynamic"></span>
                </h2>
            </div>
        </div>
    </div>

    <div class="container parcours">
        <h1>Mon parcours</h1>
        <div class="card text-white text-center pt-5" style="background-color: #02332E">
            <img src="assets/img/parcours.png" alt="mon parcours" height="100%" width="50%" class="parcours-img" style="margin-left: 25%">
            <div class="tableau-actions">
                <br>
                <a href="assets/doc/CV.pdf" class="btn-download-tableau btn-secondary" download>
                    <button type="button" class="btn btn-primary">Télécharger mon CV</button>
                </a>
            </div>
        </div>
    </div>


    <div class="container tableau" id="tableau">
        <h1>Mon tableau de synthèse</h1>
        <div class="card text-white text-center pt-5" style="background-color: #02332E">
            <img src="assets/img/tableau.png" alt="mon tableau de synthèse" height="100%" width="50%" class="tableau-img" style="margin-left: 25%">
            <div class="tableau-actions">
                <br>
                <a href="assets/doc/tableau.pdf" class="btn-download-tableau btn-secondary" download>
                    <button type="button" class="btn btn-primary">Télécharger le pdf</button>
                </a>
                <a href="assets/doc/tableau.ods" class="btn-download-tableau" download>
                    <button type="button" class="btn btn-primary">Télécharger le tableau Excel</button>
                </a>
            </div>
        </div>
        <br>
    </div>

    <div class='container ap' id="ap">
        <h1>Mes Ateliers Professionnels</h1>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_startdev500x500.png" class="card-img-top" alt="logo de startdev">
                    <div class="card-body text-white" style="background-color: #02332E">
                        <h5 class="card-title">1ère année - StartDev</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDomitys">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalDomitys" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon stage chez Domitys</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselDomitys" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/teams_domitys.png" class="d-block w-100" alt="capture du trello de Domitys">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/tests_domitys.png" class="d-block w-100" alt="Capture d'un cahier de tests chez Domitys">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/rapports_domitys.png" class="d-block w-100" alt="Capture de l'application de rapports">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_domitys.png" class="d-block w-100" alt="Capture des compétences chez Domitys">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDomitys" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDomitys" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets/doc/rapport_domitys.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger le rapport de stage</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_millesnuits500x500.png" class="card-img-top" alt="logo de mille nuits">
                    <div class="card-body text-white" style="background-color: #02332E">
                        <h5 class="card-title">1ère année - Mille nuits</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalS2C">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalS2C" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon stage chez Stock2Com</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselS2C" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/cahier_charges_s2c.png" class="d-block w-100" alt="Capture d'écran du cahier des charges fourni par Stock2Com">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/resultat_s2c.png" class="d-block w-100" alt="Capture d'écran des résultats finaux">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_s2c.png" class="d-block w-100" alt="Capture des compétences chez Stock2Com">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselS2C" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselS2C" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets/doc/rapport_s2c.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger le rapport de stage</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_epoka500x500.png" class="card-img-top" alt="logo d'Epoka">
                    <div class="card-body text-white" style="background-color: #02332E">
                        <h5 class="card-title">2ème année - EPOKA</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalS2C">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalS2C" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon stage chez Stock2Com</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselS2C" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/cahier_charges_s2c.png" class="d-block w-100" alt="Capture d'écran du cahier des charges fourni par Stock2Com">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/resultat_s2c.png" class="d-block w-100" alt="Capture d'écran des résultats finaux">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_s2c.png" class="d-block w-100" alt="Capture des compétences chez Stock2Com">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselS2C" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselS2C" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets/doc/rapport_s2c.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger le rapport de stage</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>


    <div class='container stages' id="stages">
        <h1>Mes Stages</h1>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_domitys500x500.png" class="card-img-top" alt="logo de domitys">
                    <div class="card-body text-white" style="background-color: #02332E">
                        <h5 class="card-title">1ère année - DOMYTYS SAS</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDomitys">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalDomitys" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon stage chez Domitys</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselDomitys" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/teams_domitys.png" class="d-block w-100" alt="capture du trello de Domitys">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/tests_domitys.png" class="d-block w-100" alt="Capture d'un cahier de tests chez Domitys">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/rapports_domitys.png" class="d-block w-100" alt="Capture de l'application de rapports">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_domitys.png" class="d-block w-100" alt="Capture des compétences chez Domitys">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDomitys" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDomitys" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets/doc/rapport_domitys.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger le rapport de stage</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_stock2com500x500.png" class="card-img-top" alt="logo de stock2com">
                    <div class="card-body text-white" style="background-color: #02332E">
                        <h5 class="card-title">2ème année - STOCK2COM</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalS2C">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalS2C" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon stage chez Stock2Com</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselS2C" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/cahier_charges_s2c.png" class="d-block w-100" alt="Capture d'écran du cahier des charges fourni par Stock2Com">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/resultat_s2c.png" class="d-block w-100" alt="Capture d'écran des résultats finaux">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_s2c.png" class="d-block w-100" alt="Capture des compétences chez Stock2Com">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselS2C" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselS2C" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets/doc/rapport_s2c.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger le rapport de stage</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container veille" id="veille">
        <h1>Ma veille</h1>
        <div class="card text-white text-center pt-5" style="background-color: #02332E">
            <div id="carouselVeille" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/capture_feedly500x500.png" class="d-block w-100" alt="Capture de mon feedly">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/capture_veille500x500.png" class="d-block w-100" alt="Capture d'écran de ma veille Notion">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/article_notion500x500.png" class="d-block w-100" alt="Capture d'un article sur Notion">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVeille" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselVeille" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br>
            <a href="https://www.notion.so/Veille-professionnelle-2c75946faeed80379ef2e5f5057455dc" class="btn-secondary">
                <button type="button" class="btn btn-primary">Accéder à ma veille</button>
            </a>
        </div>
    </div>
    <br>


    <div class="container contact" id="contact">
        <div class="row">
            <h1>Contact</h1>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card bg-success text-white">
                    <div class="card-header">
                        <h1>Mes informations</h1>
                    </div>
                    <div class="container-infos">
                        <div class="row">
                            <p><span><i class="bi bi-linkedin"></i></span> Quentin Villegente</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card bg-success text-white">
                    <div class="card-header">
                        <h1>Formulaire de contact</h1>
                    </div>
                    <div class="row mt-4">
                        <div class="mb-3 col-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="objet" class="form-label">Objet</label>
                            <select class="form-select">
                                <option select>Sélectionnez un objet</option>
                                <option value='info'>Besoin d'information</option>
                                <option value='rdv'>Prise de rendez-vous</option>
                                <option value='stage'>Demande de stage</option>
                                <option value='autre'>Autre</option>
                            </select>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    const phrases = [
        "Futur diplômé du BTS SIO",
        "Passionné par le code",
        "Sérieux et motivé",
        "Bienvenue sur mon portfolio"
    ];

    let index = 0;
    let dynamic = document.getElementById('dynamic');

    function changePhrase() {
        dynamic.textContent = phrases[index];
        index = (index + 1) % phrases.length;
    }

    changePhrase();
    setInterval(changePhrase, 2500);
</script>