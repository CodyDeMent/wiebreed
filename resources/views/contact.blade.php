@extends('layouts.layout')
@section('title', 'Contact')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="/contact" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input  name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label><br />
                            <textarea name="message" class="form-control" id="message"></textarea>
                        </div>
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection