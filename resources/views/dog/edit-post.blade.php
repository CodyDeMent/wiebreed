@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    @php
        $dogName = $_POST['name'];
        $birthdate = $_POST['birthdate'];
        $description = $_POST['description'];
        $isParent = $_POST['parent'];
        $motherID = $_POST['mother'];
        $fatherID = $_POST['father'];
        $adoptable = $_POST['adoptable'];
        $picture = $_POST['picture'];
        $id = $_POST['id'];

        DB::table('dogs')
        ->where('id', $id)
        ->update(
            [
                'dogName' => $dogName,
                'birthdate' => $birthdate,
                'description' => $description,
                'isParent' => $isParent,
                'motherID' => $motherID,
                'fatherID' => $fatherID,
                'adoptable' => $adoptable,
                'pictureID' => $picture
            ]
        )
    @endphp
    Your submission has been recorded.

@endsection