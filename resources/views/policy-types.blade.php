@extends('layouts.header')

@section('title', 'Insurance Types')
@section('content')
<div class="container mx-auto my-6">
    <header>
        <h1 class="text">Insurance Types</h1>
    </header>

    <main class="text">
        @if ($policies->isEmpty())
        <p>No policies available at the moment.</p>
        @else
        <div class="card-container">
            @foreach ($policies->unique('name') as $policy)
            <div class="card">
                <div class="card-image">
                    <img src="{{ $policy->type_image_url }}" alt="{{ $policy->name }}">
                </div>
                <div class="card-body">
                    <div class="card-title">{{ $policy->name }}</div>
                    <div class="card-content">
                        <p><strong></strong> {{ $policy->description }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/policy-types/' . $policy->name) }}" class="btn btn-primary">More Info</a>
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