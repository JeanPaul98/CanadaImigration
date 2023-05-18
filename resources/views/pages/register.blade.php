<div id="register" class=" bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            {{-- <div class="section-title">Etude de dossier</div> --}}
            <h2 class="h2-heading">Veuillez remplir les formulaires</h2>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
        <form class="row g-3" method="POST" enctype="multipart/form-data">
          
            <label for="inputEmail4" class="form-label" id="description">Nom Complet</label>
            <div class="col-md-6 form-floating">
              <input type="text" class="form-control" id="floatingNom">
              <label for="floatingNom">Nom</label>
            </div>
            <div class="col-md-6 form-floating">
              <input type="text" class="form-control" id="floatingPrenom">
              <label for="floatingPrenom">Prenom</label>
            </div>
           
            <div class="mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-check-label" id="description">Niveau d'études</label>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Baccalauréat
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Licence
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Maitrise
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Doctorat
                          </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="row">
                    <div class="col-md-8 form-floating">
                        <input type="email" class="form-control" id="floatingEmail" >
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="col-md-4 form-floating">
                        <input type="text" class="form-control" id="floatingNt" >
                        <label for="floatingNt">Numéro Téléphone</label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-check-label" id="description">Province Souhaitée</label>
                        <div class="form-radio">
                          <input class="form-radio-input" type="radio" >
                          <label class="form-radio-label" for="gridCheck">
                            Québec
                          </label>
                        </div>
        
                        <div class="form-radio">
                          <input class="form-radio-input" type="radio" >
                          <label class="form-radio-label" for="gridCheck">
                            Ontario
                          </label>
                        </div>
        
                        <div class="form-radio">
                          <input class="form-radio-input" type="radio" >
                          <label class="form-radio-label" for="gridCheck">
                            Nouveau Brunswick
                          </label>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <label class="form-check-label" id="description">Vous nous autorisez à faire l'étude de dossier ?</label>
                        <div class=" form-check form-switch ">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12">

                <label class="form-check-label" id="description">Relevés de notes de la seconde à la terminale.</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control" id="inputGroupFile02" name="fichiers[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 

                <label class="form-check-label" id="description">Relevé de notes du BAC, attestation ou diplôme de BAC</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control" id="inputGroupFile02" name="fichiers[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 

                <label class="form-check-label" id="description">Attestation ou un dernier diplôme équivalent</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control" id="inputGroupFile02" name="fichiers[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 

                <label class="form-check-label" id="description">Certificat de naissance</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control" id="inputGroupFile02" name="fichiers[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Soumettre</button>
                </div>
        </form>
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->