@extends('layouts.header')

@section('title', $policy->name)

@section('content')
<div class="container mx-auto my-6">
    <main class="text">
        <div class="policy-details row">
            <div class="col-md-6">
                <div class="policy-image">
                    <img src="{{ $policy->type_image_url }}" alt="{{ $policy->name }}" class="img-fluid" style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="company-image">
                    <img src="{{ $policy->company_image_url }}" alt="{{ $policy->name }}" class="img-fluid" style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>

        <div class="policy-info mt-4 text-center">
            <h2>Description:</h2>
            <p>{{ $policy->description }}</p>

            <h3>Price: {{ $policy->price }}</h3>
            <p><strong>Company:</strong> {{ $policy->company }}</p>

            <h4>Insurance Details:</h4>
            <p>{{ $policy->insurance_details ?? 'No details available.' }}</p>
            <a href="#" class="btn btn-primary mt-4">Buy Now</a>
        </div>
    </main>

    <footer class="text text-center mt-5">
        <p>&copy; 2024 Insurance Company</p>
    </footer>
</div>
@endsection