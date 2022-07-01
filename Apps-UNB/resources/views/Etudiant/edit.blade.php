<!-- Modal d'ajouter-->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #FFC300;">
                        <h5 class="modal-title"  style="color:#050705  ;" id="exampleModalLabel">Enregister un étudiant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form  action="{{route('etudiant.store')}}" method="post" enctype="multipart/form-data">
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
                        <label for="inputName" class="form-label">Email</label>
                        <input required type="text" name="email" class="form-control" id="prenom">
                    </div>
                    <div class="col-6">
                        <label for="inputName" class="form-label">Matricule</label>
                        <input required type="text" name="matricule" class="form-control" id="prenom">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="inputName" class="form-label">Cycle</label>
                        <select class="form-select" name="cycle">
                            <option value="Licence" >Licence</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="inputName" class="form-label">Niveau d'etude</label>
                        <select class="form-select" name="niveau_etude">
                            <option value="Licence1" >Licence 1</option>
                            <option value="Licence2" >Licence 2</option>
                            <option value="Licence3">Licence 3</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="inputName" class="form-label">Anneé academique</label>
                        <select class="form-select" name="annee_academique">
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="inputName" class="form-label">Photo</label>
                        <input required type="file" name="photo" class="form-control" id="photo">           
                    </div>
                <div><br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Valider l'inscription">
                    </div>
                    </div>
                    
            </form>
            </div>
        </div>
    </div>
    
</div>