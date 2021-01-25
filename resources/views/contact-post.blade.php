@extends('layouts.layout')
@section('title', 'Contact')
@section('content')

    @php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phone'];
        $message = $_POST['message'];

        DB::table('contact')->insert(
            [
                'fullname' => $name,
                'email' => $email,
                'phone' => $phonenumber,
                'message' => $message
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