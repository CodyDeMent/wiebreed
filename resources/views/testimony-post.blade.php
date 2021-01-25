@extends('layouts.layout')
@section('title', 'Contact')
@section('content')

    @php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rating = $_POST['rating'];
        $comments = $_POST['comments'];

        DB::table('testimonial')->insert(
            [
                'fullname' => $name,
                'email' => $email,
                'stars' => $rating,
                'comments' => $comments
            ]
        );
    @endphp

    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    Thank you for taking time out of your day to contact us! Your submission has been recorded.
                </div>
            </div>
        </div>
    </div>

@endsection