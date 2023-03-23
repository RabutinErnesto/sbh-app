@extends('layouts.app')
@section('titre')
        SBHAPP -LOCATION | UPDATE
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">MODIFIER LOCATION </div>
           <hr>


            <form method="POST" action="{{ route('locations.update', $location->id) }}">
            {{csrf_field()}}
            @method('PATCH')
            {{Form::hidden('id', $location->id)}}

            <div class="form-group">
                {{Form::label('', 'Location')}}
                {!! Form::text('location', $location->location, ['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
            {{Form::label('', 'Prix HT')}}
            {{Form::text('prix_ht', $location->prix_ht, ['required','class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('', 'Prix en Euro')}}
                {{Form::text('prix_euro', $location->prix_euro, ['required','class' => 'form-control'])}}
                </div>
           <div class="form-group">
                {{Form::label('', 'Intruction')}}
                {{Form::text('intruction', $location->intruction, ['required','class' => 'form-control'])}}
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
