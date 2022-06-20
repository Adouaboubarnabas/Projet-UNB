@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Etudiants</h2>
            </div>
            <div class="pull-right">
                @can('etudiant-create')
                <a class="btn btn-success" href="{{ route('etudiants.create') }}"> Inscrire un nouvel étudiant</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $etudiant inscrit avec succès }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>IDENTITE</th>
            <th>matricule</th>
            <th>niveau</th>
            <th>cycle</th>
            <th>année académique</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($etudiants as $erudiant)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $etudiant->identite }}</td>
	        <td>{{ $product->matricule }}</td>
            <td>{{ $product->niveau }}</td>
            <td>{{ $product->cycle }}</td>
            <td>{{ $product->annee academique }}</td>
	        <td>
                <form action="{{ route('etudiants.destroy',$etudiant->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('etudians.show',$etudiantt->id) }}">Show</a>
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('etudiants.edit',$etudiant->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('etudiant-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $products->links() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection