@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div>
        @php
            $dogID = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
            $frenchie = DB::table('dogs')
                    ->where('id', '=', $dogID)
                    ->get();


        @endphp
        @foreach($frenchie as $bulldog)
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="/admin/dog/edit" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Dog Name</label>
                            <input  name="name" type="text" class="form-control" id="name" value="{{$bulldog->dogName}}" aria-describedby="dogHelp">
                            <div id="dogHelp" class="form-text">This will allow you to easily identify them on the site</div>
                        </div>
                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" id="birthdate" value="{{$bulldog->birthdate}}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label><br />
                            <textarea name="description" class="form-control" id="description">{{$bulldog->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="mother" class="form-label">Mother's ID</label>
                            <input type="number" name="mother" class="form-control" id="mother" value={{$bulldog->motherID}}>
                        </div>
                        <div class="mb-3">
                            <label for="father" class="form-label">Father's ID</label>
                            <input type="number" name="father" class="form-control" id="father" value={{$bulldog->fatherID}}>
                        </div>
                        <div class="mb-3 form-check">
                            <label class="form-check-label" for="parent">Is this dog a parent?</label>
                            <select name="parent" id="parent" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="picture" name="picture" class="form-label">Picture ID</label>
                            <input name="picture" type="number" class="form-control" id="picture" value={{$bulldog->pictureID}}>
                        </div>
                        <div class="mb-3 form-check">
                            <label class="form-check-label" for="adoptable">Adoptable?</label>
                            <select name="adoptable" id="adoptable" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <input type="hidden" name="id" id="id" value="{{$dogID}}">
                        </div>
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection