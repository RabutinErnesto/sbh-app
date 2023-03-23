@extends('layouts.app')
@section('titre')
        SBH - APP | Location
@endsection
@section('contenu')
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Liste des locations
                <a href="{{ route('locations.create') }}"><span class="badge badge-primary shadow-primary m-1">Nouvelle location</span></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Location</th>
                        <th>Prix HT</th>
                        <th>Prix en Euro</th>
                        <th>intruction</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($location as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->prix_ht }} AR</td>
                        <td>{{ $item->prix_euro }} Euro</td>
                        <td>{{ $item->intruction }}</td>
                        <td>
                            <a href=""><span class="badge badge-secondary m-1">Afficher</span></a>
                            <a href="{{ route('locations.edit', $item->id) }}"><span class="badge badge-success m-1">Modifier</span></a>
                            <form action="{{ route('locations.destroy', $item->id) }}" method="POST" style="display: inline-block;">
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
