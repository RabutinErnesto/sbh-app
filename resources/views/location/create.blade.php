@extends('layouts.app')
@section('titre')
        SBHAPP - LOCATION | ADD
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">NEW LOCATION</div>
           <hr>
            {!!Form::open(['action' => 'App\Http\Controllers\LocationController@store', 'method' => 'POST'])!!}
            {{csrf_field()}}


            <div class="form-group">
                {{Form::label('', 'Location')}}

                {{Form::text('location','', ['class' => 'form-control'])}}

           </div>

           <div class="form-group">
            {{Form::label('', 'Prix HT')}}
            {{Form::number('prix_ht', '', ['required','class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('', 'Prix en Euro')}}
                {{Form::number('prix_euro', '', ['required','class' => 'form-control'])}}
                </div>
           <div class="form-group">
                {{Form::label('', 'Intruction')}}
                {{Form::text('intruction', '', ['required','class' => 'form-control'])}}
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
