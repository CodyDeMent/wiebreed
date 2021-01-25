@extends('layouts.layout')
@section('title', 'Unavailable')
@section('content')
    @php
        $dogID = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $frenchies = DB::table('dogs')
                ->join('pictures', 'dogs.pictureID', '=', 'pictures.pictureID')
                ->get();
    @endphp
    <div class="container">
        @foreach($frenchies as $frenchy)
            @if($frenchy->id == $dogID)
                <div class="row">
                    <div class="col">
                        <img src="{{$frenchy->picturePath}}" width="400px">
                    </div>
                    <div class="col">
                        About <br>
                        {{$frenchy->description}}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        {{$frenchy->dogName}}
                    </div>
                    <div class="col">
                        Birth date: {{$frenchy->birthdate}}
                    </div>
                </div>
            @endif
        @endforeach
    </div>


@endsection