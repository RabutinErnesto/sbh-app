@extends('layouts.app')
@section('titre')
        SBHAPP -GUIDE | UPDATE
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">MODIFIER GUIDE </div>
           <hr>


            <form method="POST" action="{{ route('guides.update', $guide->id) }}">
            {{csrf_field()}}
            @method('PATCH')
            {{Form::hidden('id', $guide->id)}}

            <div class="form-group">
                {{Form::label('', 'guide')}}
                {!! Form::text('guide', $guide->guide, ['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
            {{Form::label('', 'Prix HT')}}
            {{Form::text('prix_ht', $guide->prix_ht, ['required','class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('', 'Prix en Euro')}}
                {{Form::text('prix_euro', $guide->prix_euro, ['required','class' => 'form-control'])}}
                </div>
           <div class="form-group">
                {{Form::label('', 'Intruction')}}
                {{Form::text('intruction', $guide->intruction, ['required','class' => 'form-control'])}}
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
