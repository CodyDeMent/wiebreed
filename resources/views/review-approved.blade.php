@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
@php
    $reviewID = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

    DB::table('testimonial')
    ->where('id', $reviewID)
    ->update(
    [
    'approved' => 'Yes'
    ]
    );
@endphp
Your submission has been recorded.

@endsection