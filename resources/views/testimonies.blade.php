@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @php
                        $reviews = DB::table('testimonial')
                        ->where('approved', '=', 'Yes')
                        ->get();
                    @endphp

                    <div class="row">
                        <div class="col">
                            Name
                        </div>
                        <div class="col">
                            Rating
                        </div>
                        <div class="col-9">
                            Message
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
                            <div class="col-9">
                                {{$review->comments}}
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col">
                            <form action="/testimonies" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input  name="name" type="text" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-check-label" for="rating">Rating?</label>
                                    <select name="rating" id="rating" class="form-control">
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                        <option value=4>4</option>
                                        <option value=5>5</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="comments" class="form-label">Comments</label><br />
                                    <textarea name="comments" class="form-control" id="comments"></textarea>
                                </div>
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-primary form-control">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection