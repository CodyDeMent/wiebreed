<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Wiebreed
            </a>
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
                Dashboard
            </a>
            <a class="navbar-brand" href="{{ url('/admin/upload') }}">
                Photo Upload
            </a>
            <a class="navbar-brand" href="{{ url('/admin/dog/new') }}">
                Add Dogs
            </a>
            <a class="navbar-brand" href="{{ url('/admin/dogs/view') }}">
                View All Dogs
            </a>
            <a class="navbar-brand" href="{{ url('/admin/testimonies') }}">
                Testimonies
            </a>
            <a class="navbar-brand" href="{{ url('/admin/photos') }}">
                Photos
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
            </div>
        </div>
    </nav>
</div>
