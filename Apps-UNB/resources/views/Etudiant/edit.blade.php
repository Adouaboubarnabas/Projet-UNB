<!-- Modal de modification-->

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #FFC300;">
                        <h5 class="modal-title"  style="color:#050705  ;" id="exampleModalLabel">Modification des données</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form method="POST" action="{{route('etudiant')}}">
            @csrf
                <div class="row">
                    <div class="col-6">
                            <label for="inputName" class="form-label">Nom(s)</label>
                            <input required type="text" name="nom" class="form-control" id="inputName">
                    </div>
                        <div class="col-6">
                            <label for="inputName" class="form-label">Prénom</label>
                            <input required type="text" name="prenom" class="form-control" id="prenom">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="inputName" class="form-label">Cycle</label>
                        <select class="form-select" name="cycle">
                                               
                        <option value="" name="cycle">Licence</option>
                         </select>
                    </div>
                            <div class="col-6">
                                <label for="inputName" class="form-label">Niveau d'etude</label>
                                    <select class="form-select" name="niveau_etude">
                                        <option value="" name="niveau_etude" >Licence 1</option>
                                        <option value="" name="niveau_etude" >Licence 2</option>
                                        <option value=""name="niveau_etude">Licence 3</option>
                                    </select>
                            </div>
                </div>
                <div class="row">
                            <div class="col-6">
                                <label for="inputName" class="form-label">Anneé academique</label>
                                <input required type="text" name="anne_academique" class="form-control" id="anne_academique">
                            </div>
                            <div class="col-6">
                                <label for="inputName" class="form-label">Matricule</label>
                                <input required type="text" name="matricule" class="form-control" id="matricule">           
                            </div>
                            </div>
                <div class="row">
                            <div class="col-6">
                                <label for="inputName" class="form-label">Email</label>
                                <input required type="text" name="email" class="form-control" id="email">
                            </div>
                            <div class="col-6">
                                <label for="inputName" class="form-label">Photo</label>
                                <input required type="file" name="photo" class="form-control" id="photo">           
                            </div>
                <div><br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <a type="button" href="{{('etudiant')}}" class="btn btn-primary">Enregistrer</a>
                    </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    </div>
              </form>
            </div>
        </div>
    </div>
</div>