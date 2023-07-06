<form class="" action="" method="POST">


    <section class="section section-default text-justify px-4 mb-3">
        <div class="container px-4">
            <div class="form-row">
                <div class="form-group col-lg-4">
                    <label class="required font-weight-bold text-dark text-2">votre nom</label>
                    <input type="text" value="" data-msg-required="votre nom" maxlength="100" class="form-control" name="name" required>
                </div>
                <div class="form-group col-lg-4">
                    <label class="required font-weight-bold text-dark text-2">votre prnom</label>
                    <input type="text" value="" data-msg-required="votre prenom" data-msg-email="Please enter a valid firstname" maxlength="100" class="form-control" name="lastname" required>
                </div>
                <div class="form-group col-lg-4">
                    <label class="required font-weight-bold text-dark text-2">Nom de l'entreprise<label>
                    <input type="text" value="" data-msg-required="Entrer le nom de votre entreprise" data-msg-email="Entrer le nom  valide" maxlength="100" class="form-control" name="name-entreprise" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-4">
                    <label class="required font-weight-bold text-dark text-2">votre email </label>
                    <input type="email" value="" data-msg-required="Entrer votre adresse email ici" data-msg-email="Entrer votre adresse email" maxlength="100" class="form-control" name="email" required>
                </div>
                <div class="form-group col-lg-4">
                    <label class="required font-weight-bold text-dark text-2">votre numero de telephone</label>
                    <input type="text" value="" data-msg-required="Entrer votre telephone ici" data-msg-email="Please enter a valid number phone" maxlength="100" class="form-control" name="phone" required>
                </div>
                <div class="form-group col-lg-4">
                    <label class="required font-weight-bold text-dark text-2">Un document (cahier de charge ou autre) </label>
                    <input type="file" value="" data-msg-required="le fichier" data-msg-email="Please enter a valid file" maxlength="100" class="form-control" name="fonction" required>
                </div>
            </div>
            <div class="form-row px-5">
                <div class="form-group col">
                    <label class="required font-weight-bold text-dark text-2"> Description  </label>
                    <textarea maxlength="5000" data-msg-required="Enumerez vos problèmes ici" rows="4" class="form-control" name="description" required></textarea>
                </div>
            </div>
        </div>
    </section>

    <div class="form- text-center mt-5">
        <div class="form-group col-lg-12">
            <input type="submit" value="envoyer" class="btn-lg btn-primary btn-modern" data-loading-text="Loading...">
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
