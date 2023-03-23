@extends('layouts.app')
@section('titre')
        SBH - APP | DISTANCE
@endsection
@section('contenu')
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Liste des distance
                <a href="{{ route('distance.create') }}"><span class="badge badge-primary shadow-primary m-1">Nouveau distance</span></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ville Depart</th>
                        <th>Ville Destination</th>
                        <th>Distance Km</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($distance as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ville_depart }}</td>
                        <td>{{ $item->ville_arrive }}</td>
                        <td>{{ $item->distance }}km</td>
                        <td>
                            <a href=""><span class="badge badge-secondary m-1">Afficher</span></a>
                            <a href="{{ route('distance.edit', $item->id) }}"><span class="badge badge-success m-1">Modifier</span></a>
                            <form action="{{ route('distance.destroy', $item->id) }}" method="POST" style="display: inline-block;">
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
