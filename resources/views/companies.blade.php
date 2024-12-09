@extends('layouts.header')

@section('title', 'Insurance Companies')
@section('content')
<div class="container mx-auto my-6">
    <header>
        <h1 class="text">Insurance Companies</h1>
    </header>

    <main class="text">
        @if ($policies->isEmpty())
        <p>No policies available at the moment.</p>
        @else
        <div class="card-container">
            @foreach ($policies->unique('company') as $policy)
            <div class="card">
                <div class="card-image">
                    <img src="{{ $policy->company_image_url }}" alt="{{ $policy->company }}">
                </div>
                <div class="card-body">
                    <div class="card-title">{{ $policy->company }}</div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/companies/' . $policy->company) }}" class="btn btn-primary">View Company</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </main>

    <footer class="text">
        <p>&copy; 2024 Insurance Company</p>
    </footer>
</div>
@endsection