<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Livewire\Auth;
use Illuminate\Http\File;
use DB;

class NewDog extends Component
{
    use WithFileUploads;

    public $name;
    public $available;
    public $birthdate;
    public $description;
    public $isParent;
    public $mother;
    public $father;
    public $adoptionDate;
    public $picture;

    public function submitForm($name, $available, $birthdate, $description,
                               $isParent, $mother, $father, $adoptionDate, $picture
    )
    {
        $path = request()->file($picture)->store('/public/images/dogs');

        DB::table('dogs')->insert(
            [
                'dogName' => $name,
                'picture' => $path,
                'isAvailable' => $available,
                'birthdate' => $birthdate,
                'description' => $description,
                'isParent' => $isParent,
                'motherID' => $mother,
                'fatherID' => $father,
                'adoptionDate' => $adoptionDate
            ]
        );

        //DB::insert('insert into dogs (dogName, picture, description, birthdate, isParent, fatherID, motherID, available) values ($dogName, $path, $birthdate, $description, $isParent, $fatherID, $motherID, $available)');
        return back()->with('success_message', 'New dog has been submitted');

    }

    public function render()
    {
        return view('livewire.new-dog');
    }
}
