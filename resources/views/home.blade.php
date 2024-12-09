@extends('layouts.header')

@section('title', 'Home')

@section('content')

<h1>Insurance App</h1>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://static.investindia.gov.in/s3fs-public/2019-05/Insurance1.jpg" height="600px" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn.prod.website-files.com/65ce038ac58a7f988fb59ccd/660dde5fd75afffac6083973_Insurance%20Basics%20Everything%20you%20need%20to%20know-min.webp" height="600px" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://ananinsurancebrokercompanylimited.com/images/mad_images/group-shot.jpg/rs-846x692.jpg/about.jpg" height="600px" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://lovinghomecareinc.com/wp-content/uploads/2021/10/25-Best-Private-Health-Insurance-Companies-In-The-World.png.webp" alt="Companies">
            <div class="card-body">
                <h5 class="card-title">Insurance Companies</h5>
                <p class="card-text">Explore the various insurance companies offering different plans and services.</p>
                <a href="{{ url('/companies') }}" class="btn btn-primary">View Companies</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://m.economictimes.com/thumb/msid-72412620,width-1200,height-900,resizemode-4,imgsize-231333/19-1.jpg" alt="Policies">
            <div class="card-body">
                <h5 class="card-title">Insurance Policies</h5>
                <p class="card-text">Browse through a wide variety of insurance policies suited to your needs.</p>
                <a href="{{ url('/policies') }}" class="btn btn-primary">View Policies</a>
            </div>
        </div>
    </div>
</div>

@endsection