@extends('layouts.app')
@section('titre')
        SBHAPP - DISTANCE | ADD
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">NEW DISTANCE</div>
           <hr>
            {!!Form::open(['action' => 'App\Http\Controllers\DistanceController@store', 'method' => 'POST'])!!}
            {{csrf_field()}}


            <div class="form-group">
                {{Form::label('', 'Ville Depart')}}

                {!!Form::Select('ville_dep',$ville, $id, ['class' => 'form-control'])!!}

           </div>


           <div class="form-group">
            {{Form::label('', 'Ville destination')}}
            {!!Form::Select('ville_arr',$ville, $id, ['class' => 'form-control'])!!}
           </div>
           <div class="form-group">
                {{Form::label('', 'Distance')}}
                {{Form::number('distance', '', ['required','placeholder' => 'Exemple 100 km','class' => 'form-control'])}}
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
