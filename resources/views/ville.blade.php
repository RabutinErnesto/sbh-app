@extends('layouts.app')
@section('titre')
        SBH - APP | VILLE
@endsection 
@section('contenu')
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Liste des villages
                <a href="{{URL::to('/villages/create')}}"><span class="badge badge-primary shadow-primary m-1">Nouveau village</span></a>
            </div>
            <div class="card-body"> 
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Nom du villade</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($ville as $key => $value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->village_abr}}</td>
                        <td>{{$value->village_name}}</td>
                        <td>
                            <a href="{{ route('villages.show', $value->id) }}"<span class="badge badge-secondary m-1">Afficher</span></a>
                            <a href="{{ route('villages.edit', $value->id) }}"<span class="badge badge-success m-1">Modifier</span></a>
                            <form action="{{ route('villages.destroy', $value->id) }}" method="POST" style="display: inline-block;">
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