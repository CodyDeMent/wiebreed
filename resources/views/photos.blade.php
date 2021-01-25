@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
@php
    $photos = DB::table('pictures')->get();
@endphp


    <div class="container">

        <div class="row">
            @foreach($photos as $photo)
            <div class="col">
                @php
                    echo "<img src='" . $photo->picturePath . "' style='max-height:300px' />";
                    echo "<br/> PictureID: " . $photo->pictureID;
                @endphp
            </div>
            @endforeach
        </div>
    </div>
@endsection