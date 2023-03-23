@extends('layouts.app')
@section('titre')
        SBHAPP - ACTIVITES | UPDATE
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">MODIFIER ACTIVITE </div>
           <hr>


            <form method="POST" action="{{ route('activites.update', $activite->id) }}">
            {{csrf_field()}}
            @method('PATCH')
            {{Form::hidden('id', $activite->id)}}

            <div class="form-group">
                {{Form::label('', 'Ville')}}
                <select class="form-control" name="ville">

                    <option>{{$activite->ville}}</option>
                    @foreach ($ville as $item)
                    <option value="{{$item->village_name}}">{{$item->village_name}}</option>
                    @endforeach
                </select>
           </div>
           <div class="form-group">
            {{Form::label('', 'Degination')}}
            {{Form::text('designation', $activite->Designation, ['required','class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('', 'Code activite')}}
                {{Form::text('code_activite', $activite->code_activite, ['required','class' => 'form-control'])}}
                </div>
           <div class="form-group">
                {{Form::label('', 'Tarification')}}
                {{Form::text('tarification', $activite->tarification, ['required','class' => 'form-control'])}}
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
