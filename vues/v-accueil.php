<link rel="stylesheet" href="./assets/css/accueil.css">
<div class="text-white" style="background-color: #082904">
    <div class="container">
        <div class="row">
            <div class="col-12 welcome-section">
                <h1>Quentin Villegente</h1>
                <h2 class="dynamic-text">
                    <span id="dynamic"></span>
                </h2>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container" id="parcours">
        <h1>Mon parcours</h1>
        <div class="card text-white text-center pt-5" style="background-color: #02332E">
            <div class="row">
                <div class=" col-lg-6 col-md-6" col-sm-12>
                    <p class="presentation">Je m'appelle Quentin Villegente et je suis étudiant en BTS SIO spécialité
                        SLAM (Solutions Logicielles et Applications Métiers) au lycée Paul Louis Courier.
                        Après avoir fait un Baccalauréat Général avec spécialité Mathématiques et NSI (Numérique et Science de l'Informatique),
                        le BTS SIO spécialité SLAM me semblait être la suite logique de mon parcours en développement.</p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="assets/img/parcours_test.png" alt="mon parcours" class="img-fluid" style=" width: 300px;">
                </div>
            </div>
            <div class="tableau-actions text-center">
                <br>
                <a href="assets/doc/CV.pdf" class="btn-download-tableau btn-secondary" download>
                    <button type="button" class="btn btn-primary">Télécharger mon CV</button>
                </a>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container" id="bts">
        <h1>Le BTS SIO</h1>
        <div class="card text-white text-center pt-5" style="background-color: #02332E">
            <div class="row">
                <div class=" col-lg-6 col-md-6" col-sm-12>
                    <h2>L'option SLAM</h2>
                    <p class="presentation">L'option SLAM du BTS SIO est l'option qui concerne le développement d'application et la création
                        de solutions métiers. Les étudiants en option SLAM doivent donc maîtriser différents langages de programmation,
                        IDEs, Frameworks et SGBDs.
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>L'option SISR</h2>
                    <p class="presentation">L'option SISR du BTS SIO est l'option axée sur la sécurité des systèmes d'information
                        et la fiabilité du réseau d'une organisation. Les étudiants en SISR sont donc experts en ce qui concerne
                        la cybersécurité et le fonctionnement d'un système-réseau.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>


    <div class='container ap' id="ap">
        <h1>Mes Ateliers Professionnels</h1>
        <div class="row mt-4 ">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-3 d-flex justify-content-center">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_startdev500x500.png" class="card-img-top" alt="logo de startdev">
                    <div class="card-body text-white text-center" style="background-color: #02332E">
                        <h5 class="card-title">1ère année - StartDev</h5>
                        <p class="card-text">Compétences mobilisées : <br>- Gérer le patrimoine informatique <br>- Répondre aux demandes d'incidents <br>- Développer la présence en ligne de l'oganisation <br>- Travailler en mode projet <br>- Organiser son développement personnel</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalStartDev">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalStartDev" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon Atelier Professionnel StartDev</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselStartDev" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/wordpress_setup_startdev.png" class="d-block w-100" alt="Capture du de l'installation de Wordpress">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/wordpress_plugins_startdev.png" class="d-block w-100" alt="Capture des plugins Wordpress">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_startdev.png" class="d-block w-100" alt="Capture des compétences de StartDev">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselStartDev" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselStartDev" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                        <p>Cet atelier professionnel s'est deroulé lors du premier semestre de ma formation, nous n'avions donc pas encore choisi nos options. Il était commun pour les futurs SLAMs et futurs SISRs.</p>
                                        <p>La première étape était donc de comparer différents CMS selon certains critères, puis de modifier un site vitrine déjà existant en utilisant le CMS Wordpress.</p>
                                        <p>Compétences mobilisées : <br>- Gérer le patrimoine informatique <br>- Répondre aux demandes d'incidents <br>- Développer la présence en ligne de l'oganisation <br>- Travailler en mode projet <br>- Organiser son développement personnel</p>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets/doc/doc_cms_startdev.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger le comparatif de cms</button>
                                    </a>
                                    <a href="assets/doc/doc_wordpress_startdev.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger la documentation d'installation wordpress</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-3 d-flex justify-content-center">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_millesnuits500x500.png" class="card-img-top" alt="logo de mille nuits">
                    <div class="card-body text-white text-center" style="background-color: #02332E">
                        <h5 class="card-title">1ère année - Mille nuits</h5>
                        <p class="card-text">Compétences mobilisées : <br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Développer la présence en ligne de l'oganisation<br>- Travailler en mode projet <br>- Mettre à disposition des utilisateurs un service informatique<br>- Organiser son développement personnel</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalMilleNuits">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalMilleNuits" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon Atelier Professionnel Mille Nuits</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselMilleNuits" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/accueil_millenuits.png" class="d-block w-100" alt="Capture d'écran du cahier des charges fourni par Stock2Com">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/bdd_millenuits.png" class="d-block w-100" alt="Capture d'écran des résultats finaux">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_millenuits.png" class="d-block w-100" alt="Capture des compétences chez Stock2Com">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMilleNuits" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMilleNuits" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                        <p>L'atelier professionnel Mille Nuits était le premier atelier après notre choix d'option. Pour les SLAMs, il était donc question de créer une application web permettant d'effectuer certaines actions précisées dans un cahier des charges.</p>
                                        <p>Ce projet se déroulait par équipes de trois. Dans un premier temps, il était question d'adapter la base de données du projets selon différents attendus. Une fois la base de données validée, le travail de l'application web était partagé entre les trois membres de l'équipe et chacun devait développer les fonctionnalités qui les concernaient.</p>
                                        <p>Technologies utilisées :
                                            <br> - IDE : Netbeans
                                            <br> - Langages : HTML, CSS, PHP
                                            <br> - Framework : Bootstrap
                                            <br> - SGBD : MariaDB
                                        </p>
                                        <p>Compétences mobilisées : <br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Développer la présence en ligne de l'oganisation<br>- Travailler en mode projet <br>- Mettre à disposition des utilisateurs un service informatique<br>- Organiser son développement personnel</p>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets/doc/doc_bdd_millenuits.pdf" class="btn-download-tableau btn-secondary" download>
                                        <button type="button" class="btn btn-primary">Télécharger la documentation de notre base de données</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-3 d-flex justify-content-center">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_epoka500x500.png" class="card-img-top" alt="logo d'Epoka">
                    <div class="card-body text-white text-center" style="background-color: #02332E">
                        <h5 class="card-title">2ème année - EPOKA</h5>
                        <p class="card-text">Compétences mobilisées : <br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Développer la présence en ligne de l'oganisation<br>- Travailler en mode projet <br>- Mettre à disposition des utilisateurs un service informatique<br>- Organiser son développement personnel</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEpoka">
                            En savoir plus
                        </button>
                    </div>
                    <div class="modal" id="ModalEpoka" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mon Atelier Professionnel Epoka</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselEpoka" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/accueil_epoka.png" class="d-block w-100" alt="Capture d'écran de l'accueil d'Epoka Abo">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/ajout_vente_epoka.png" class="d-block w-100" alt="Capture d'écran du formulaire d'ajout de ventes">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/liste_abos_epoka.png" class="d-block w-100" alt="Capture des listes d'abonnements d'Epoka">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/webservice_code_epoka.png" class="d-block w-100" alt="Capture du code d'un des webservices d'Epoka">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/competences_epoka.png" class="d-block w-100" alt="Capture du tableau de synthèse d'Epoka">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselEpoka" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselEpoka" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                        <p>L'atelier professionnel Epoka était pour les SLAMs l'atelier le plus complet car il se déroulait tout au long de la seconde année.</p>
                                        <p>Tout d'abord, il fallait aussi créer une base de données en fonction de différents attendus. Une fois cette base de données validée, une application Web en php devait être créée, permettant de gérer différents éléments de la base de données, comme les différentes revues disponibles ou les ventes dans mon cas.</p>
                                        <p>Ensuite, une autre application en JSP (Jakarta EE) a été créée cette fois ci pour gérer les abonnements des clients d'Epoka, notamment pour afficher les abonnements expirés ou bientôt expirés, ou encore créer de nouveaux abonnements.</p>
                                        <p>Enfin, j'ai développé des web services permettant de récuperer les informations dans la base de données. Ils sont particuliérement utiles pour l'application mobile Epoka que l'on devait développer en Java, qui utilise ses web services pour alimenter ses différentes vues ou proposer un système de connexion.</p>
                                        <p>Technologies utilisées :
                                            <br> - IDE : NetBeans, Android Studio
                                            <br> - Langages : HTML, CSS, PHP, Jakarta EE, Java
                                            <br> - Framework : CodeIgniter, Bootstrap
                                            <br> - SGBD : SQLServer
                                        </p>
                                        <p>Compétences mobilisées : <br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Développer la présence en ligne de l'oganisation<br>- Travailler en mode projet <br>- Mettre à disposition des utilisateurs un service informatique<br>- Organiser son développement personnel</p>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
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
            <div class="col-lg-4 col-md-4 col-sm-12 mb-3 d-flex justify-content-center">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_domitys500x500.png" class="card-img-top" alt="logo de domitys">
                    <div class="card-body text-white text-center" style="background-color: #02332E">
                        <h5 class="card-title">1ère année - DOMITYS SAS</h5>
                        <p class="card-text">Compétences mobilisées :<br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Travailler en mode projet<br>- Mettre à disposition des utilisateurs un service informatiqu<br>- Organiser son développement personnel</p>
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
                                    <p>Mon stage chez Domitys s'incrit dans un contexte particulier, car ils étaient en pleine migration de version sur leur application nationale. De plus, le développement chez Domitys est en grande partie externalisée.</p>
                                    <p>Le but de mon stage était donc de suivre cette migration et de vérifier le bon fonctionnement de la nouvelle version.</p>
                                    <p>Compétences mobilisées :<br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Travailler en mode projet<br>- Mettre à disposition des utilisateurs un service informatiqu<br>- Organiser son développement personnel</p>
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
            <div class="col-lg-4 col-md-4 col-sm-12 mb-3 d-flex justify-content-center">
                <div class="card rounded-3" style="width: 18rem; background-color: #02332E">
                    <img src="assets/img/logo_stock2com500x500.png" class="card-img-top" alt="logo de stock2com">
                    <div class="card-body text-white text-center" style="background-color: #02332E">
                        <h5 class="card-title">2ème année - STOCK2COM</h5>
                        <p class="card-text">Compétences mobilisées : <br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Développer la présence en ligne de l'oganisation<br>- Travailler en mode projet <br>- Mettre à disposition des utilisateurs un service informatique<br>- Organiser son développement personnel</p>
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
                                    <p>Stock2Com est une entreprise qui coiçoit des sites internet avec backoffice pour d'autres organisations, particulièrement pour les agences de voyages ou les agences immobilières.</p>
                                    <p>Ma mission lors de ce stage était de modifier certaines pages du backoffice, notamment leur esthétique, pour les remettre au goût du jour et les rendre plus intuitive pour les clients.</p>
                                    <p>Technologies utilisées :
                                        <br> - IDE : Visual Studio Code
                                        <br> - Langages : HTML, CSS, Ruby
                                        <br> - Framework : RubyOnRails
                                        <br> - SGBD : MariaDB
                                    </p>
                                    <p>Compétences mobilisées : <br>- Gérer le patrimoine informatique<br>- Répondre aux demandes d'incidents<br>- Développer la présence en ligne de l'oganisation<br>- Travailler en mode projet <br>- Mettre à disposition des utilisateurs un service informatique<br>- Organiser son développement personnel</p>
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

    <div class="container" id="Gestion">
        <h1>Ma Gestion de Patrimoine</h1>
        <div class="card text-white text-center pt-5" style="background-color: #02332E">
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-sm-12">
                    <h2>Qu'est ce que la gestion de patrimoine informatique ?</h2>
                    <p class="presentation">Le terme de patrimoine informatique n’est souvent
                        pas bien compris dans le langage courant. Lorsqu’on pense patrimoine informatique,
                        on pense évidemment aux biens matériels informatiques,
                        notamment les ordinateurs ou les téléphones.
                        Cependant, beaucoup ignorent que la définition du patrimoine informatique
                        est bien plus large, puisqu’elle comprend aussi les biens immatériels.
                        Cela veut dire que les logiciels et les documents stockés sur les ordinateurs ou téléphones
                        de l’entreprise comptent aussi dans ce qu’on appelle le patrimoine informatique.
                    </p>
                    <p class="presentation">
                        Au cours de mes stages, j'ai été ammené à écrire deux notes de synthèse
                        concernant le patrimoine informatique des organisations dans lesquelles j'ai été accueilli.
                        Vous pouvez les consulter en cliquant sur les boutons si-dessous (La note de synthèse de Stock2Com contient également
                        un comparatif entre les deux stages).
                    </p>
                    <a href="assets/doc/synthese_domitys.pdf" class="btn-download-tableau btn-secondary" download>
                        <button type="button" class="btn btn-primary">Note de Synthèse Domitys</button>
                    </a>
                    <a href="assets/doc/synthese_s2c.pdf" class="btn-download-tableau" download>
                        <button type="button" class="btn btn-primary">Note de Synthèse Stock2Com</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

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

    <br>
    <br>

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