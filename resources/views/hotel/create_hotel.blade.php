@extends('layouts.app')
@section('titre')
        SBHAPP - HOTELS | ADD
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">NEW HOTELS</div>
           <hr>
            {!!Form::open(['action' => 'App\Http\Controllers\HotelController@store', 'method' => 'POST', 'files' => true,])!!}
            {{csrf_field()}}


            <div class="form-group">
                {{Form::label('', 'Ville')}}

                {!!Form::Select('ville',$ville, $id_ville, ['class' => 'form-control'])!!}

           </div>


           <div class="form-group">
            {{Form::label('', 'Nom hotel')}}
            {!!Form::text('nom','', ['required','class' => 'form-control'])!!}
           </div>
           <div class="row">
            <div class="form-group col-4">
                {{Form::label('', 'Single')}}
                {{Form::text('single', '', ['required','class' => 'form-control'])}}
           </div>

           <div class="form-group col-4">
            {{Form::label('', 'Double')}}
            {{Form::text('double', '', ['required','class' => 'form-control'])}}
       </div>

            <div class="form-group col-4">
                {{Form::label('', 'Triple')}}
                {{Form::text('triple', '', ['required','class' => 'form-control'])}}
        </div>

           </div>
           <div class="row">
            <div class="form-group col-4">
                {{Form::label('', 'familiale')}}
                {{Form::text('familiale', '', ['required','class' => 'form-control'])}}
                </div>
                <div class="form-group col-4">
                    {{Form::label('', 'petit diej')}}
                    {{Form::text('petit_deij', '', ['required','class' => 'form-control'])}}
                    </div>
                <div class="form-group col-4">
                    {{Form::label('', 'Menu')}}
                    {{Form::text('menu', '', ['required','class' => 'form-control'])}}
                    </div>

           </div>

           <div class="form-group">
            {{Form::label('', 'Piece')}}
            {{Form::file('piece', [ 'required', 'class' => 'form-control'])}}
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
