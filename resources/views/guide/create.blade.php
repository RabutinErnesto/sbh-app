@extends('layouts.app')
@section('titre')
        SBHAPP - GUIDE | ADD
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">NEW GUIDE</div>
           <hr>
            {!!Form::open(['action' => 'App\Http\Controllers\GuideController@store', 'method' => 'POST'])!!}
            {{csrf_field()}}


            <div class="form-group">
                {{Form::label('', 'Guide')}}

                {{Form::text('guide','', ['class' => 'form-control'])}}

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
