@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="row">
                        <div class="col">Welcome {{{Auth::user()->name}}}</div>
                    </div>
                    @php
                        $contacts = DB::table('contact')
                        ->get();
                    @endphp

                    <div class="row">
                        <div class="col">
                            Name
                        </div>
                        <div class="col-4">
                            Phone Number
                        </div>
                        <div class="col">
                            Email
                        </div>
                        <div class="col">
                            Message
                        </div>
                    </div>
                    @foreach($contacts as $contact)

                        <div class="row">
                            <div class="col">
                                {{$contact->fullname}}
                            </div>
                            <div class="col-4">
                                {{$contact->phone}}
                            </div>
                            <div class="col">
                                {{$contact->email}}
                            </div>
                            <div class="col-4">
                                {{$contact->message}}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection