@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-0">
                        <div class="card mb-2">
                            <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscrire un étudiant</button>
                            <button type="button" class="btn btn-success">Listes des étudiants</button>
                            
                            <button type="button" class="btn btn-success">Gestion sécretaire</button>
                            </div>
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header" style="background-color: #FFC300;">
                                        <h5 class="modal-title"  style="color:#050705  ;" id="exampleModalLabel">Enregister un étudiant</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="inputName" class="form-label">Nom(s)</label>
                                                <input required type="text" name="nom" class="form-control" id="inputName">
                                            </div>
                                             <div class="col-6">
                                                <label for="inputName" class="form-label">Prénom</label>
                                                <input required type="text" name="nom" class="form-control" id="inputName">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                            <label for="inputName" class="form-label">Cycle</label>
                                             <select class="form-select">
                                               
                                               <option value="">Licence</option>
                                             </select>
                                            </div>
                                            <div class="col-6">
                                            <label for="inputName" class="form-label">Niveau d'etude</label>
                                             <select class="form-select">
                                               <option value="">Licence 1</option>
                                               <option value="">Licence 2</option>
                                               <option value="">Licence 3</option>
                                             </select>
                                            </div>
                                        </div>
                                            <div class="row">
                                            <div class="col-6">
                                                <label for="inputName" class="form-label">Anneé academique</label>
                                                <input required type="text" name="nom" class="form-control" id="inputName">
                                            </div>
                                             <div class="col-6">
                                                <label for="inputName" class="form-label">Matricule</label>
                                                <input required type="text" name="nom" class="form-control" id="inputName">           
                                        </div>
                                         </div>
                                            <div class="row">
                                            <div class="col-6">
                                                <label for="inputName" class="form-label">Email</label>
                                                <input required type="text" name="nom" class="form-control" id="inputName">
                                            </div>
                                             <div class="col-6">
                                                <label for="inputName" class="form-label">Photo</label>
                                                <input required type="file" name="nom" class="form-control" id="inputName">           
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                             <table class="table align-middle mb-5 bg-white">
                                    <thead class="bg-light">
                                        <tr >
                                        <th>IDENTITE</th>
                                        <th>Matricule</th>
                                        <th>Cycle</th>
                                        <th>Niveau d'étude</th>
                                        <th>Année Academique</th>
                                        <th style="text-align :center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img
                                                src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                                alt=""
                                                style="width: 45px; height: 45px"
                                                class="rounded-circle"
                                                />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">John Doe</p>
                                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">0000022221</p>
                                        
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Licence</p>
                                            
                                        </td>
                                           <td>
                                            <p class="fw-normal mb-1">1ere Anneé</p>
                                        </td>
                                           <td>
                                            <p class="fw-normal mb-1">2021-2022</p>
                                        </td>
                                        <td style="text-align :center;">
                                        {{-- @can('admin') --}}
                                            <button type="button" class="btn btn-info btn-sm btn-rounded serviceeditbtn">
                                            Modifier
                                            </button>
                                             <button type="button" class="btn btn-danger btn-sm btn-rounded">
                                            Supprimer
                                            </button>
                                             <button type="button" class="btn btn-info btn-sm btn-rounded">
                                            Carte
                                            </button>
                                            
                                        {{-- @endcan --}}
                                        </td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
 
    </div>
    
</div>
<script>
       $(document).ready(function(){
        $(`.serviceeditbtn`).click(function (e){
            e.preventDefault();
            alert('hello');

        })

       })
</script>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
@endsection
