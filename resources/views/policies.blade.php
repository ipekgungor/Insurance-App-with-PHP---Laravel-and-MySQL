@extends('layouts.header')

@section('title', 'All Policies')
@section('content')
<div class="container mx-auto my-6">
    <header>
        <h1 class="text">All Insurance Policies</h1>
    </header>

    <main class="text">
        @if ($policies->isEmpty())
        <p>No policies available at the moment.</p>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Company</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($policies as $policy)
                <tr>
                    <td>{{ $policy->name }}</td>
                    <td>{{ $policy->description }}</td>
                    <td>{{ $policy->company }}</td>
                    <td>{{ $policy->price }}</td>
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