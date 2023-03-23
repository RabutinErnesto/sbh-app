@extends('layouts.app')
@section('titre')
        SBHAPP - HOTEL | UPDATE
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">MODIFIER HOTEL </div>
           <hr>


            <form method="POST" action="{{ route('hotels.update', $hotel->id) }}">
            {{csrf_field()}}
            @method('PATCH')
            {{Form::hidden('id', $hotel->id)}}

            <div class="form-group">
                {{Form::label('', 'Ville Depart')}}
                <select class="form-control" name="ville">

                    <option>{{$hotel->ville}}</option>
                    @foreach ($ville as $item)
                    <option value="{{$item->village_name}}">{{$item->village_name}}</option>
                    @endforeach
                </select>
           </div>
           <div class="form-group">
            {{Form::label('', 'Nom hotel')}}
            {{Form::text('nom', $hotel->nom_hotel, ['required','class' => 'form-control'])}}
       </div>
       <div class="row">
        <div class="form-group col-4">
            {{Form::label('', 'Single')}}
            {{Form::text('single', $hotel->single, ['required','class' => 'form-control'])}}
       </div>

       <div class="form-group col-4">
        {{Form::label('', 'Double')}}
        {{Form::text('double', $hotel->double, ['required','class' => 'form-control'])}}
   </div>

        <div class="form-group col-4">
            {{Form::label('', 'Triple')}}
            {{Form::text('triple',$hotel->triple, ['required','class' => 'form-control'])}}
    </div>

       </div>
       <div class="row">
        <div class="form-group col-4">
            {{Form::label('', 'familiale')}}
            {{Form::text('familiale', $hotel->familiale, ['required','class' => 'form-control'])}}
            </div>
            <div class="form-group col-4">
                {{Form::label('', 'petit deij')}}
                {{Form::text('petit_deij', $hotel->petit_deij, ['required','class' => 'form-control'])}}
                </div>
            <div class="form-group col-4">
                {{Form::label('', 'Menu')}}
                {{Form::text('menu', $hotel->menu, ['required','class' => 'form-control'])}}
                </div>


       </div>

       <div class="form-group">
        {{Form::label('', 'Piece')}}
        {{Form::file('piece', [  'class' => 'form-control'])}}
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
