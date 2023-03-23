@extends('layouts.app')
@section('titre')
        SBH - APP | HOTEL
@endsection
@section('contenu')
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Liste des hotels
                <a href="{{ route('hotels.create') }}"><span class="badge badge-primary shadow-primary m-1">Nouveau hotel</span></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ville</th>
                        <th>Nom</th>
                        <th>single</th>
                        <th>double</th>
                        <th>triple</th>
                        <th>familial</th>
                        <th>Petit deij</th>
                        <th>Menu</th>
                        <th>Piece</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($hotel as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ville }}</td>
                        <td>{{ $item->nom_hotel }}</td>
                        <td>{{ $item->single}}</td>
                        <td>{{ $item->double}}</td>
                        <td>{{ $item->triple}}</td>
                        <td>{{ $item->familiale}}</td>
                        <td>{{ $item->petit_deij}}</td>
                        <td>{{ $item->menu}}</td>
                        <td>{{ $item->piece}}</td>
                        <td>
                            <a href=""><span class="badge badge-secondary m-1">Afficher</span></a>
                            <a href="{{ route('hotels.edit', $item->id) }}"><span class="badge badge-success m-1">Modifier</span></a>
                            <form action="{{ route('hotels.destroy', $item->id) }}" method="POST" style="display: inline-block;">
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
