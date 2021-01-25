@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="../images/frenchie1.jpg"><rect width="100%" height="100%" fill="#777"/></img>
                </div>
                <div class="carousel-item">
                    <img width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="../images/frenchie2.jpg"><rect width="100%" height="100%" fill="#777"/></img>
                </div>
                <div class="carousel-item">
                    <img width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="../images/frenchie3.jpg"><rect width="100%" height="100%" fill="#777"/></img>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <div onclick="window.location = '/avaliable'" style="cursor:pointer">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Looking to get a French Bulldog?</h2>
                    <p class="lead">
                        Well look no further and check out the french bulldogs we have up for adoption today!
                    </p>
                </div>
                <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="../images/frenchie1.jpg"/>

                </div>
            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Lorem ipsum dolor sit amet</h2>
                    <p class="lead">
                        Vivamus tristique justo sit amet tortor ultrices facilisis eget quis sapien. Proin interdum lectus in libero facilisis, id placerat velit semper. Vestibulum sit amet ex in turpis rutrum pellentesque accumsan eu mauris. In turpis nibh, rhoncus non vehicula quis, dapibus ut orci. Nullam eu rhoncus mi. Sed vitae arcu consequat, venenatis turpis in, viverra arcu. Phasellus aliquam in velit ac auctor. Ut iaculis mauris sed venenatis pretium. Mauris maximus tempor orci sit amet ornare. Etiam molestie lorem quis nibh malesuada ultricies. Aenean auctor dapibus quam, id fermentum neque varius id. Integer id nulla purus. Donec nec eros varius, sodales justo nec, tristique nisl. Phasellus id leo consequat, malesuada lectus vitae, vehicula purus. Proin vel tempor turpis.

                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" preserveAspectRatio="xMidYMid slice" role="img" src="../images/frenchie2.jpg"/>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Lorem ipsum dolor sit amet.</h2>
                    <p class="lead">
                        Fusce fermentum mattis ex in suscipit. Proin id tellus vitae eros interdum imperdiet vitae at sapien. Vestibulum accumsan auctor nisi id euismod. Etiam sed dui sed lectus volutpat cursus non commodo urna. Nunc consequat aliquet ultricies. Proin tempor erat a orci semper, eget pretium leo consequat. In quam quam, porta quis fermentum sit amet, fermentum quis neque. Morbi sit amet viverra justo, sit amet finibus enim. Integer rutrum felis eget tellus egestas dictum. Aliquam semper ornare fermentum. Ut semper nisl nulla, in condimentum nulla egestas vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultrices non enim ac dapibus. Etiam fringilla sed massa congue mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;


                    </p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" preserveAspectRatio="xMidYMid slice" role="img" src="../images/frenchie3.jpg"/>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>
    </main>
@endsection