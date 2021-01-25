@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    @php
        $frenchies = DB::table('dogs')
        ->join('pictures', 'dogs.pictureID', '=', 'pictures.pictureID')
        ->get();
    @endphp
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="row">
                    </div>
                    @php
                        $frenchies = DB::table('dogs')
                        ->join('pictures', 'dogs.pictureID', '=', 'pictures.pictureID')
                        ->get();
                    @endphp
                    @foreach($frenchies as $frenchy)

                        @if($frenchy->adoptable == "No")
                            <div onclick="window.location = '/dog/{{$frenchy->id}}'" style="cursor:pointer">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{$frenchy->picturePath}}" width="200px">
                                    </div>
                                    <div class="col">
                                        {{$frenchy->dogName}}
                                    </div>
                                    <div class="col">
                                        {{$frenchy->description}}
                                    </div>
                                    <div class="col">
                                        {{$frenchy->birthdate}}
                                    </div>
                                </div>
                            </div>

                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection