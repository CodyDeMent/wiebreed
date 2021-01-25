<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Auth;
use Illuminate\Http\File;
use DB;
use Livewire\Component;

class PhotoUpload extends Component
{
    public function render()
    {
        $path = request()->file('photo')->store('/public/images/dogs');

        DB::table('pictures')->insert(
            [
                'picturePath' => URL::to('/') . $path
            ]
        );
        return view('livewire.photo-upload');
    }
}
