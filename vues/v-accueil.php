<link rel="stylesheet" href="./assets/css/accueil.css">
<div class="text-white" style="background-color: #082904">
    <div class="row">
        <div class="welcome-section">
            <h1>Quentin Villegente</h1>
            <h2 class="dynamic-text">
                <span id="dynamic"></span>
            </h2>
        </div>
    </div>
</div>
<div class="text-white" style="background-color: #082904">
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
</div>
<div class="text-white" style="background-color: #082904">
    <div class="container tableau">
        <h1>Mon parcours</h1>
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
</div>
<div class="text-white" style="background-color: #082904">
<div class='container stages'>
    <h1>Mes Stages</h1>
    <div class="row mt-4">
        <div class="col-4">
            <div class="card rounded-3" style="width: 18rem">
                <img src="assets/img/logo_domitys500x500.png" class="card-img-top" alt="logo de domitys">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">1ère année - DOMYTYS SAS</h5>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDomitys">
                        En savoir plus
                    </button>
                </div>
                <div class="modal" id="ModalDomitys" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card rounded-3" style="width: 18rem">
                <img src="assets/img/logo_stock2com500x500.png" class="card-img-top" alt="logo de stock2com">
                <div class="card-header">   

                </div>
                <div class="card-body">
                    <h5 class="card-title">2ème année - STOCK2COM</h5>
                    <p class="card-text"></p>
                    <a href="index.php?uc=stages&action=domitys" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container contact">
    <div class="row">
        <h1>Contact</h1>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card bg-success text-white">
                <div class="card-header">   
                    <h1>Mes informations</h1>
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