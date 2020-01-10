@extends('layouts.header')
@section('title', 'authentication')

<div uk-height-viewport="offset-top: true; offset-bottom: true" class="uk-flex uk-flex-middle">
    <div class="uk-width-2-3@m uk-width-1-2@s uk-margin-auto  border-radius-6 ">
        <div class="uk-child-width-1-2@m uk-background-grey uk-grid-collapse" uk-grid>
            <div class="uk-text-middle uk-margin-auto-vertical uk-text-center uk-padding-small uk-animation-scale-up">
                <p> <i class="fas fa-graduation-cap uk-text-white" style="font-size:60px"></i> </p>
                <h1 class="uk-text-white uk-margin-small"> UPFCours </h1>
                <h5 class="uk-margin-small uk-text-muted uk-text-bold uk-text-nowrap"> Tous vers l'excellence et l'innovation </h5>
            </div>
            <div>
                <div class="uk-card-default uk-padding uk-card-small">

                    <!-- Login tab tab -->
                    <div id="login" class="tabcontent tab-default-open animation: uk-animation-slide-right-medium">
                        <h2 class="uk-text-bold"> Je me connecte </h2>
                        <p class="uk-text-muted uk-margin-remove-top uk-margin-small-bottom"> veuillez saisir vos identifiants </p>
                        <div class="uk-form-label"> Email addresse </div>
                        <div class="uk-inline">
                            <span class="uk-form-icon"><i class="far fa-User icon-medium"></i></span>
                            <input class="uk-input uk-form-width-large" placeholder="nom@exemple.com" type="text">
                        </div>
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-expand@m uk-margin-small-bottom">
                                <div class="uk-form-label">Mot de Passe</div>
                            </div>
                            <div class="uk-width-auto@m">
                                <a href="#" class="tablinks uk-text-small " onclick="openTabs(event, 'forget')"> Mot de passe oublié ? </a>
                            </div>
                        </div>
                        <div class="uk-inline uk-margin-small-bottom">
                            <span class="uk-form-icon"><i class="fas fa-key icon-medium"></i></span>
                            <input class="uk-input uk-form-width-large" name="password" id="password" placeholder="Mot de Passe" type="password">
                        </div>
                        <div>
                            <label>
                                <input class="uk-checkbox" type="checkbox" data-show-pw="#password">
                                <span class="checkmark uk-text-small"> Afficher le mot de passe  </span>
                            </label>
                        </div>
                        <div class="uk-margin uk-text-small">
                            Je n'ai pas encore de compte.
                            <a href="#" class="tablinks uk-text-bold" onclick="openTabs(event, 'register')"> Je m'inscris  </a>
                        </div>
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-expand@m">
                                <input class="uk-button uk-button-success" type="submit" class="button" value="Se Connecter">
                            </div>
                        </div>
                    </div>

                    <!-- register tab -->
                    <div id="register" class="tabcontent animation: uk-animation-slide-left-medium">
                        <h2 class="uk-text-bold"> Je m'inscris</h2>
                        <p class="uk-text-muted uk-margin-remove-top uk-margin-small-bottom"> Créez votre compte </p>
                        <div class="uk-form-label">ID étudiant</div>
                        <div class="uk-inline">
                            <span class="uk-form-icon"><i class="far fa-User icon-medium"></i></span>
                            <input class="uk-input uk-form-width-large" placeholder="ID étudiant" type="text" name="id">
                        </div>
                        <div class="uk-form-label">Nom complet</div>
                        <div class="uk-inline">
                            <span class="uk-form-icon"><i class="far fa-User icon-medium"></i></span>
                            <input class="uk-input uk-form-width-large" placeholder="Nom complet" type="text">
                        </div>
                        <div class="uk-form-label">Email addresse</div>
                        <div class="uk-inline">
                            <span class="uk-form-icon"><i class="far fa-envelope icon-medium"></i></span>
                            <input class="uk-input uk-form-width-large" placeholder="nom@example.com" type="text">
                        </div>
                        <form class="uk-child-width-1-2@m uk-grid-small" uk-grid>
                            <div>
                                <div class="uk-form-label">Mot de Pass </div>
                                <input class="uk-input" placeholder="Mot de Passe" type="Password" id="password-1">
                            </div>
                            <div>
                                <div class="uk-form-label">Confirmer votre mot de passe</div>
                                <input class="uk-input" placeholder="Mot de Passe" type="Password"  id="password-2">
                            </div>
                        </form>
                        <div>
                            <label>
                                <input class="uk-checkbox" type="checkbox" data-show-pw="#password-1 ,#password-2">
                                <span class="checkmark uk-text-small"> Afficher le mot de passe </span>
                            </label>
                        </div>
                        <div class="uk-margin">
                            <label>
                                <input class="uk-checkbox" type="checkbox" checked>
                                <span class="checkmark uk-text-small"> J'accepte les </span>
                                <a href="#modal-overflow" class="uk-text-bold uk-text-small" uk-toggle> Conditions Générales d'Utilisation </a>
                            </label>
                        </div>
                        <div class=" uk-flex-middle" uk-grid>
                            <div class="uk-width-expand@m">
                                <input class="uk-button uk-button-success" type="submit" class="button" value="Je m'inscris">
                            </div>
                            <div class="uk-width-auto@m">
                                <span class="uk-text-small">J'ai déjà un compte.<a href="#" class="tablinks uk-text-bold" onclick="openTabs(event, 'login')"> Je me connecte </a>  </span>
                            </div>
                        </div>
                    </div>

                    <!-- forget tab -->
                    <div id="forget" class="tabcontent animation: uk-animation-slide-bottom-medium">
                        <h2 class="uk-text-bold"> Mot de passe oublié  </h2>
                        <p class="uk-text-muted uk-margin-remove-top uk-margin-small-bottom">pour réinitialiser votre mot de passe, entrez votre email</p>
                        <div>
                            <div class="uk-form-label">Email addresse</div>
                            <div class="uk-inline">
                                <span class="uk-form-icon"><i class="fas fa-lock icon-medium"></i></span>
                                <input class="uk-input uk-form-width-large" placeholder="nom@example.com" type="text">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <input class="uk-button uk-button-success" type="submit" class="button" value="Réinitialiser le mot de passe">
                        </div>
                        <span class="uk-text-small">
                                    Je n'ai pas encore de compte.
                                    <a href="#" class="tablinks" onclick="openTabs(event, 'register')"> Je m'inscris  </a>
                                    Ou
                                    <a href="#" class="tablinks" onclick="openTabs(event, 'login')"> Je me connecte  </a>
                                </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Terms model-->
<div id="modal-overflow" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default uk-margin-small-top uk-margin-small-right" type="button" uk-close></button>
        <div class="uk-modal-header">
            <b class="uk-text-medium"> Terms  </b>
        </div>
        <div class="uk-modal-body" uk-overflow-auto>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </div>
    </div>
</div>
<script>
    // Listen for clicks in the document
    document.addEventListener('click', function (event) {

        // Check if a password selector was clicked
        var selector = event.target.getAttribute('data-show-pw');
        if (!selector) return;

        // Get the passwords
        var passwords = document.querySelectorAll(selector);

        // Toggle visibility
        Array.from(passwords).forEach(function (password) {
            if (event.target.checked === true) {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        });
    }, false);
</script>
</body>
</html>
