@extends('layouts.app')
@section('titre')
        SBH - APP | ACTIVITE
@endsection
@section('contenu')
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Liste des activite
                <a href="{{ route('activites.create') }}"><span class="badge badge-primary shadow-primary m-1">Nouveau activite</span></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ville</th>
                        <th>Designation</th>
                        <th>Code activite</th>
                        <th>Tarification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($activite as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ville }}</td>
                        <td>{{ $item->Designation}}</td>
                        <td>{{ $item->code_activite}}</td>
                        <td>{{ $item->tarification }} Ar</td>
                        <td>
                            <a href=""><span class="badge badge-secondary m-1">Afficher</span></a>
                            <a href="{{ route('activites.edit', $item->id) }}"><span class="badge badge-success m-1">Modifier</span></a>
                            <form action="{{ route('activites.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
				@method('DELETE')
                            <button type="submit" class="badge badge-danger m-1" onclick="return confirm('Êtes-vous sûr?');">Supprimer</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
@endsection
