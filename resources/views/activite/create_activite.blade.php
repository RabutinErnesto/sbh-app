@extends('layouts.app')
@section('titre')
        SBHAPP - ACTIVITES | ADD
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">NEW ACTIVITE</div>
           <hr>
            {!!Form::open(['action' => 'App\Http\Controllers\ActiviteController@store', 'method' => 'POST'])!!}
            {{csrf_field()}}


            <div class="form-group">
                {{Form::label('', 'Ville')}}

                {!!Form::Select('ville',$ville, $id, ['class' => 'form-control'])!!}

           </div>

           <div class="form-group">
            {{Form::label('', 'Degination')}}
            {{Form::text('designation', '', ['required','class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('', 'Code activite')}}
                {{Form::text('code_activite', '', ['required','class' => 'form-control'])}}
                </div>
           <div class="form-group">
                {{Form::label('', 'Tarification')}}
                {{Form::text('tarification', '', ['required','class' => 'form-control'])}}
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
