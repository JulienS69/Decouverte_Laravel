@extends('Templates/template')

@section('titrePage')
    Liste des Visiteurs
@endsection

@section('titreItem')
    <h1>Tous les Visiteurs</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-stiped">
        <thead>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Rue</th>
        <th>CodePostal</th>
        <th>Ville</th>
        <th>DateEmbauche</th>
        </thead>
        @foreach($visiteurs as $visiteur)
            <tr>
                <td> {{ $visiteur->VIS_MATRICULE }}</td>
                <td> {{ $visiteur->VIS_NOM }}</td>
                <td> {{ $visiteur->VIS_PRENOM }}</td>
                <td> {{ $visiteur->VIS_ADRESSE }}</td>
                <td> {{ $visiteur->VIS_CP }}</td>
                <td> {{ $visiteur->VIS_VILLE }}</td>
                <td> {{ $visiteur->VIS_DATEEMBAUCHE }}</td>
            </tr>
        @endforeach
    </table>
@endsection
