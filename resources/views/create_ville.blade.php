@extends('layouts.app')
@section('titre')
        SBHAPP - VILLE | ADD
@endsection 
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">NEW VILLAGE</div>
           <hr>
            {!!Form::open(['action' => 'App\Http\Controllers\VillageController@store', 'method' => 'POST'])!!}
            {{csrf_field()}}
           <div class="form-group">
                {{Form::label('', 'Abreviation')}}
                {{Form::text('village_abr', '', ['placeholder' => 'Exemple ABV','class' => 'form-control'])}}
           </div>
           <div class="form-group">
                {{Form::label('', 'Nom du village')}}
                {{Form::text('village_name', '', ['placeholder' => 'Exemple Ambalavao','class' => 'form-control'])}}
           </div>
           
           
           <div class="form-group">
            {{Form::submit('Enregistrer', ['class' => 'btn btn-light px-5'])}}
          </div>
          {!!Form::close()!!}
         </div>
         </div>
      </div>
    </div>
@endsection 