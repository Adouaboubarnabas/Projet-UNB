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
                            <button type="button" class="btn btn-success">Nommer une sécrétaire</button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
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
                                        <tr>
                                        <th>IDENTITE</th>
                                        <th>Matricule</th>
                                        <th>Cycle</th>
                                        <th>Niveau d'étude</th>
                                        <th>Année Academique</th>
                                        <th>Actions</th>
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
                                        <td>
                                        @can('admin')
                                            <button type="button" class="btn btn-info btn-sm btn-rounded">
                                            Voir
                                            </button>
                                        @endcan
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
