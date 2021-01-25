@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @php
                        $reviews = DB::table('testimonial')
                        ->where('approved', '=', 'No')
                        ->get();
                    @endphp

                    <div class="row">
                        <div class="col">
                            Name
                        </div>
                        <div class="col">
                            Rating
                        </div>
                        <div class="col-8">
                            Message
                        </div>
                        <div class="col">
                            Approve
                        </div>
                    </div>
                    @foreach($reviews as $review)
                        <div class="row">
                            <div class="col">
                                {{$review->fullname}}
                            </div>
                            <div class="col">
                                {{$review->stars}}
                            </div>
                            <div class="col-8">
                                {{$review->comments}}
                            </div>
                            <div class="col">
                                <a href="/admin/testimonial/approve/{{$review->id}}">Approve</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection