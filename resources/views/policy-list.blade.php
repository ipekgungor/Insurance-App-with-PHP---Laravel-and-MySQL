@extends('layouts.header')

@section('title', 'Policies for ' . $policies->first()->name)
@section('content')
<div class="container mx-auto my-6">
    <header>
        <h1 class="text">Policies for {{ $policies->first()->name }}</h1>
    </header>

    <main class="text">
        @if ($policies->isEmpty())
        <p>No policies available for this type at the moment.</p>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Company</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($policies as $policy)
                <tr>
                    <td>{{ $policy->name }}</td>
                    <td>{{ $policy->description }}</td>
                    <td>{{ $policy->price }}</td>
                    <td>{{ $policy->company }}</td>
                    <td>
                        <a href="{{ url('/policies/' . $policy->id) }}" class="btn btn-primary">View More</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </main>

    <footer class="text">
        <p>&copy; 2024 Insurance Company</p>
    </footer>
</div>
@endsection