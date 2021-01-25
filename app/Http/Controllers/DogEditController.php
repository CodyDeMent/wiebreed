<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogEditController extends Controller
{
    //

    public function edit($dogID)
    {
        $data['id'] = $dogID;
        return view('dog/edit', $data);
    }
}
