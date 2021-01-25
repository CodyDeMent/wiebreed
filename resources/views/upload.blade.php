@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div>
            <div>
                <div class="row">
                    <div class="col>">
                        <form method="post" action="/dog" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input class="form-control" type="file" name="dog"/>
                            <button class="form-control" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection