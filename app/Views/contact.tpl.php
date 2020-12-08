<form method="POST" class="row g-3 needs-validation" novalidate>
  <div class="col-xl-6">
    <div class="main-image">
      <img src="assets/img/img-contact.jpg" id="img-contact" class="img-fluid" alt="Responsive image">
    </div>
  </div>
  <div class="col-xl-6">
    <div class="col-xl-10">
    <h3>Les champs avec * sont pré-requis</h4>
      <label for="validationCustom01" class="form-label">Nom *</label>
      <input type="text" class="form-control" id="validationCustom01" name="nom" required>
      <div class="invalid-feedback">
        Veuillez entrer votre nom
      </div>
    </div>
    <div class="col-xl-10">
      <label for="validationCustom02" class="form-label">Prénom *</label>
      <input type="text" class="form-control" id="validationCustom02" name="prenom" required>
      <div class="invalid-feedback">
        Veuillez entrer votre prénom
      </div>
    </div>
    <div class="col-xl-10">
      <label for="validationCustom02" class="form-label">Société</label>
      <input type="text" class="form-control-societe" id="validationCustom02" name="societe">
    </div>
    <div class="col-xl-10">
      <label for="exampleFormControlInput1" class="form-label">Email *</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="email" required>
      <div class="invalid-feedback">
        Veuillez entrer votre adresse mail
      </div>
    </div>
    <div class="col-xl-10">
      <label for="exampleFormControlInput1" class="form-label">Objet *</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="objet" required>
      <div class="invalid-feedback">
        Veuillez entrer un objet
      </div>
    </div>
    <div class="col-xl-10">
      <label for="exampleFormControlTextarea1" class="form-label">Message *</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="message" required></textarea>
      <div class="invalid-feedback">
        Veuillez ecrire votre demande
      </div>
    </div>
    <div class="col-xl-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          J'accepte les conditions d'utilisations
        </label>
        <div class="invalid-feedback">
          Vous devez cocher la petite case 😀
        </div>
      </div>
    </div>
    <div class="col-xl-10">
      <button class="btn btn-dark" type="submit">Envoyer</button>
    </div>
  </div>
</form>