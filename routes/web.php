<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Public
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/available', function () {
    return view('available');
});

Route::get('/unavailable', function () {
    return view('unavailable');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/testimonies', function () {
    return view('testimonies');
});

Route::get('/dog/{dogID}', function ($dogID) {
    $data['id'] = $dogID;
    return view('dog.view', $data);
});

Route::get('/admin/testimonial/approve/{id}', function ($id) {
    $data['id'] = $id;
    return view('review-approved', $data);
});


//Admin
Route::get('/dashboard', function () {
    if(Auth::user()->role == 'admin')
        return view('dashboard');
    else
        return redirect('/');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/dog/new', function () {
    if(Auth::user()->role == 'admin')
        return view('dog.new');
    else
        return redirect('/');
})->middleware(['auth'])->name('dog.new');

Route::get('/admin/upload', function () {
    if(Auth::user()->role == 'admin')
        return view('upload');
    else
        return redirect('/');
})->middleware(['auth'])->name('upload');

Route::get('/admin/photos', function () {
    if(Auth::user()->role == 'admin')
        return view('photos');
    else
        return redirect('/');
})->middleware(['auth'])->name('photos');
Route::get('/admin/dogs/view', function () {
    if(Auth::user()->role == 'admin')
        return view('dog.viewdogs');
    else
        return redirect('/');
})->middleware(['auth'])->name('photos');

Route::get('/admin/dog/edit/{dogID}', function ($dogID) {
    if(Auth::user()->role == 'admin'){
        $data['id'] = $dogID;
        return view('dog.edit', $data);
    }
    else
        return redirect('/');
})->middleware(['auth'])->name('dog.edit');
Route::get('/admin/testimonies/', function () {
    if(Auth::user()->role == 'admin')
        return view('admin-testimonials');
    else
        return redirect('/');
})->middleware(['auth'])->name('admin-testimonials');





/*
 * Posts
 */
Route::post('dog', function(){
    $path = request()->file('dog')->store('/public/images/dogs');

    DB::table('pictures')->insert(
        [
            'picturePath' => URL::to('/') . "/uploads/" . $path
        ]
    );
    return view('photos');
});

Route::post('/admin/dog/new', function (Request $request) {
    if(Auth::user()->role == 'admin')
        return view('dog.new-post');
    else
        return redirect('/');
})->middleware(['auth'])->name('dog.new');

Route::post('/admin/dog/edit', function (Request $request) {
    if(Auth::user()->role == 'admin')
        return view('dog.edit-post');
    else
        return redirect('/');
})->middleware(['auth'])->name('dog.new');

Route::post('/contact', function () {
    return view('contact-post');
});
Route::post('/testimonies', function () {
    return view('testimony-post');
});

require __DIR__.'/auth.php';
