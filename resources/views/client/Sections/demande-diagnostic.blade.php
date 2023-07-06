<form class="" action="" method="POST">
    <div class="contact-form-success alert alert-success d-none mt-4">
        <strong>Success!</strong> Your message has been sent to us.
    </div>

    <div class="contact-form-error alert alert-danger d-none mt-4">
        <strong>Error!</strong> There was an error sending your message.
        <span class="mail-error-message text-1 d-block"></span>
    </div>

    <section class="section section-default text-justify px-4 mb-3">
        <div class="container px-4">
            <div class="overflow-hidden mb-5 px-2">
                <h5 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Quel type d'application </strong>voulez-vous développer ?</h5>
            </div>

            <div class="form-row px-5">
                <div class="form-group col">
                    <div class="custom-checkbox-1">
                        <input id="createAccount" type="checkbox" name="mobile" value="1" />
                        <label for="appMobile">Application mobile</label>
                    </div>
                </div>
            </div>
            <div class="form-row px-5">
                <div class="form-group col">
                    <div class="custom-checkbox-1" data-toggle="collapse" data-target=".shipping-field-wrapper">
                        <input id="shipAddress" type="checkbox" name="appWeb" value="1" />
                        <label for="appWeb">Application web</label>
                    </div>
                </div>
            </div>
            <div class="form-row px-5">
                <div class="form-group col">
                    <div class="custom-checkbox-1" data-toggle="collapse" data-target=".shipping-field-wrapper">
                        <input id="shipAddress" type="checkbox" name="siteWeb" value="1" />
                        <label for="site">Site Internet</label>
                    </div>
                </div>
            </div>
            <div class="form-row px-5">
                <div class="form-group col">
                    <div class="custom-checkbox-1" data-toggle="collapse" data-target=".shipping-field-wrapper">
                        <input id="shipAddress" type="checkbox" name="conseil" value="1" />
                        <label for="needConseil">J’ai besoin d’être conseillé, je ne sais pas ce qu’il me faut</label>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section-default text-justify px-4 mb-3">
        <div class="container px-4">
            <div class="overflow-hidden mb-5 px-2">
                <h5 class="font-weight-normal text-7 mb-0">Avez-vous déjà un <strong class="font-weight-extra-bold">cahier des charges</strong> ?</h5>
            </div>

            <div class="form-row px-5">
                <div class="form-group col">
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="cahier-charge" data-msg-required="Please select at least one option." id="inlineRadio1" value="oui"> oui
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="cahier-charge" data-msg-required="Please select at least one option." id="inlineRadio2" value="non"> Non
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="cahier-charge" data-msg-required="Please select at least one option." id="inlineRadio3" value="en cours"> En cours de redaction
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-default text-justify px-4 mb-3">
        <div class="container px-4">
            <div class="overflow-hidden mb-5 px-2">
                <h5 class="font-weight-normal text-7 mb-0">Où en êtes vous dans <strong class="font-weight-extra-bold">votre projet</strong>? </h5>
            </div>

            <div class="form-row px-5">
                <div class="form-group col">
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="niveau-projet" data-msg-required="Please select at least one option." id="inlineRadio1" value="Je suis à la recherche d'informations"> Je suis à la recherche d'informations
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="niveau-projet" data-msg-required="Please select at least one option." id="inlineRadio2" value="Je connais ma problématique et recherche une solution">Je connais ma problématique et recherche une solution
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="niveau-projet" data-msg-required="Please select at least one option." id="inlineRadio3" value="Je suis à la recherche d'un prestataire">Je suis à la recherche d'un prestataire
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-default text-justify px-4 mb-3">
        <div class="container px-4">
            <div class="overflow-hidden mb-5 px-2">
                <h5 class="font-weight-normal text-7 mb-0">Avez-vous une <strong class="font-weight-extra-bold">enveloppe budgétaire</strong> allouée à votre projet ?</h5>
            </div>

            <div class="form-row px-5">
                <div class="form-group col">
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="financement" data-msg-required="Please select at least one option." id="inlineRadio1" value="oui"> Oui
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="financement" data-msg-required="Please select at least one option." id="inlineRadio2" value="non"> Non
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-default text-justify px-4 mb-3">
        <div class="container px-4">
            <div class="form-row">
                <div class="form-group col">
                    <label class="required font-weight-bold text-dark text-2"> Décrivez en une phrase votre projet/les spécificités de votre projet </label>
                    <textarea maxlength="5000" data-msg-required="Decrivez votre projet ici" rows="4" class="form-control" name="description" required></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label class="required font-weight-bold text-dark text-2"> Quel est votre plus grand problème en ce moment ? Qu'est-ce qui vous empêche d'atteindre vos objectifs ? </label>
                    <textarea maxlength="5000" data-msg-required="Enumerez vos problèmes ici" rows="4" class="form-control" name="probleme" required></textarea>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-default text-justify px-4 mb-3">
        <div class="container px-4">
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label class="required font-weight-bold text-dark text-2">Quel est le nom de votre entreprise ?</label>
                    <input type="text" value="" data-msg-required="le nom de votre entreprise" maxlength="100" class="form-control" name="name" required>
                </div>
                <div class="form-group col-lg-6">
                    <label class="required font-weight-bold text-dark text-2">Quelle est votre fonction ?</label>
                    <input type="text" value="" data-msg-required="Entrer votre fonction ici" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="fonction" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label class="required font-weight-bold text-dark text-2">Renseignez votre e-mail pour vous recontacter</label>
                    <input type="email" value="" data-msg-required="Entrer votre adresse email ici" data-msg-email="Entrer votre adresse email" maxlength="100" class="form-control" name="email" required>
                </div>
            </div>
            <div class="form-row px-5">
                <div class="form-group col">
                    <label class="form-check-label font-weight-bold text-dark text-2 mt-2 mb-2">
                        Comment avez-vous connu cervea ?
                    </label>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="connaissance" data-msg-required="Please select at least one option." id="inlineRadio1" value="Bouche-à-Oreilles">Bouche-à-Oreilles
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="connaissance" data-msg-required="Please select at least one option." id="inlineRadio2" value="Recommandation d'un confrère"> Recommandation d'un confrère
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="connaissance" data-msg-required="Please select at least one option." id="inlineRadio2" value="Recherche Google"> Recherche Google
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="connaissance" data-msg-required="Please select at least one option." id="inlineRadio2" value="Réseaux Sociaux"> Réseaux Sociaux
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="connaissance" data-msg-required="Please select at least one option." id="inlineRadio2" value="Autre"> Autre
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="form- text-center mt-5">
        <div class="form-group col-lg-12">
            <input type="submit" value="demander un diagnostic" class="btn-lg btn-primary btn-modern" data-loading-text="Loading...">
        </div>
    </div>
</form>


    {{-- <div class="form-row">
        <div class="form-group col-lg-6">
            <label class="required font-weight-bold text-dark text-2">Full Name</label>
            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
        </div>
        <div class="form-group col-lg-6">
            <label class="required font-weight-bold text-dark text-2">Email Address</label>
            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label class="font-weight-bold text-dark text-2">Subject</label>
            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label class="required font-weight-bold text-dark text-2">Message</label>
            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
        </div>
    </div> --}}

{{-- <div class="form-row">
    <div class="form-group col">
        <div class="custom-checkbox-1">
            <input id="createAccount" type="checkbox" name="createAccount" value="1" />
            <label for="createAccount">Create an account ?</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col">
        <div class="custom-checkbox-1" data-toggle="collapse" data-target=".shipping-field-wrapper">
            <input id="shipAddress" type="checkbox" name="shipAddress" value="1" />
            <label for="shipAddress">Shop to a different address ?</label>
        </div>
    </div>
</div> --}}
