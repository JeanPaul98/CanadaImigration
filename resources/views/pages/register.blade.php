<div id="register" class=" bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            {{-- <div class="section-title">Etude de dossier</div> --}}
            <h2 class="h2-heading">Veuillez remplir les formulaires</h2>
        </div> <!-- end of col -->
      </div> <!-- end of row -->

        <form class="row g-3" action="/" method="POST" enctype="multipart/form-data">
          @csrf

            <label for="inputEmail4" class="form-label" id="description">Nom Complet</label>
            <div class="col-md-6 form-floating">
              <input type="text" class="form-control" id="floatingNom" name="nom" >
              <label for="floatingNom">Nom</label>
            </div>
            <div class="col-md-6 form-floating">
              <input type="text" class="form-control" id="floatingPrenom" name="prenom" >
              <label for="floatingPrenom">Prenom</label>
            </div>
           
            <div class="mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-check-label" id="description">Niveau d'études</label>
                        <div class="form-check">
                          <input class="form-check-input"   type="checkbox" name="niveau" id="niveau_one" value="Baccalauréat">
                          <label class="form-check-label" for="gridCheck">
                            Baccalauréat
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input"  type="checkbox" name="niveau" id="niveau_two" value="Licence">
                          <label class="form-check-label" for="gridCheck">
                            Licence
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="niveau" id="niveau_tree" value="Maitrise">
                          <label class="form-check-label" for="gridCheck">
                            Maitrise
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="niveau" id="niveau_four" value="Doctorat">
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
                        <input type="email" class="form-control"  id="floatingEmail" name="email">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="col-md-4 form-floating">
                        <input type="text" class="form-control"   id="floatingNt" name="telephone">
                        <label for="floatingNt">Numéro Téléphone</label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-check-label" id="description">Province Souhaitée</label>
                        <div class="form-radio">
                          <input class="form-radio-input" type="radio" name="province_one" id="province_one" value="Québec">
                          <label class="form-radio-label" for="gridCheck">
                            Québec
                          </label>
                        </div>
        
                        <div class="form-radio">
                          <input class="form-radio-input" type="radio" name="province_two" id="province_two" value="Ontario">
                          <label class="form-radio-label" for="gridCheck">
                            Ontario
                          </label>
                        </div>
        
                        <div class="form-radio">
                          <input class="form-radio-input" type="radio" name="province_tree" id="province_tree" value=" Nouveau Brunswick">
                          <label class="form-radio-label" for="gridCheck">
                            Nouveau Brunswick
                          </label>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <label class="form-check-label" id="description">Vous nous autorisez à faire l'étude de dossier ?</label>
                        <div class=" form-check form-switch ">
                            <input class="form-check-input"  type="checkbox" name="autorisation" id="autorisation">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12">

                <label class="form-check-label" id="description">Relevés de notes de la seconde à la terminale.</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control"   id="fichier_one" name="fichier_one[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 

                <label class="form-check-label" id="description">Relevé de notes du BAC, attestation ou diplôme de BAC</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control" id="fichier_two" name="fichier_two[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 

                <label class="form-check-label" id="description">Attestation ou un dernier diplôme équivalent</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control"  id="fichier_tree" name="fichier_tree[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 

                <label class="form-check-label" id="description">Certificat de naissance</label>
                <div class="input-group mb-4">
                  <input type="file" class="form-control"  id="fichier_four" name="fichier_four[]" multiple>
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> 
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Soumettre</button>
                </div>
        </form>

        <br>

        @if (Session::has('success'))
            <script>
                showSuccessMessage('{{ Session::get('success') }}');
            </script>
        @endif

        @if (Session::has('error'))
            <script>
                showErrorMessage('{{ Session::get('error') }}');
            </script>
        @endif

        

    </div> <!-- end of container -->
</div> <!-- end of form-2 -->