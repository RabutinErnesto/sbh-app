@extends('layouts.app')
@section('titre')
        SBHAPP - DISTANCE | UPDATE
@endsection
@section('contenu')
    <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">MODIFIER DISTANCE </div>
           <hr>


            <form method="POST" action="{{ route('distance.update', $distance->id) }}">
            {{csrf_field()}}
            @method('PATCH')
            {{Form::hidden('id', $distance->id)}}

            <div class="form-group">
                {{Form::label('', 'Ville Depart')}}
                <select class="form-control" name="ville_dep">

                    <option>{{$distance->ville_depart}}</option>
                    @foreach ($ville as $item)
                    <option value="{{$item->village_name}}">{{$item->village_name}}</option>
                    @endforeach
                </select>
           </div>
           <div class="form-group">
            {{Form::label('', 'Ville Destination')}}
            <select class="form-control" name="ville_arr">

                <option>{{$distance->ville_arrive}}</option>
                @foreach ($ville as $item)
                <option value="{{$item->village_name}}">{{$item->village_name}}</option>
                @endforeach
            </select>
       </div>
           <div class="form-group">
                {{Form::label('', 'Distance')}}
                {{Form::text('distance', $distance->distance, ['required','class' => 'form-control'])}}
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
