@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
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

                    <div class="row">
                        <div class="col">
                            Name
                        </div>
                        <div class="col-4">
                            Description
                        </div>
                        <div class="col">
                            Birth date
                        </div>
                        <div class="col">
                            Is Parent
                        </div>
                        <div class="col">
                            Mother ID
                        </div>
                        <div class="col">
                            Father ID
                        </div>
                        <div class="col">
                            Adoptable
                        </div>
                        <div class="col">
                            Picture
                        </div>
                        <div class="col">
                            Edit
                        </div>
                    </div>
                    @foreach($frenchies as $frenchy)

                        <div class="row">
                            <div class="col">
                                {{$frenchy->dogName}}
                            </div>
                            <div class="col-4">
                                {{$frenchy->description}}
                            </div>
                            <div class="col">
                                {{$frenchy->birthdate}}
                            </div>
                            <div class="col">
                                {{$frenchy->isParent}}
                            </div>
                            <div class="col">
                                {{$frenchy->motherID}}
                            </div>
                            <div class="col">
                                {{$frenchy->fatherID}}
                            </div>
                            <div class="col">
                                {{$frenchy->adoptable}}
                            </div>
                            <div class="col">
                                <img src="{{$frenchy->picturePath}}" width="50px">
                            </div>
                            <div class="col">
                                <a href="/admin/dog/edit/{{$frenchy->id}}">Edit</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection