
@extends('user_layouts.app')

@section('content')
    <div class="container">
        <h2>Hotel Recommendations</h2>

        <form action="{{ route('recommendations.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="method" class="form-label">Select Method:</label>
                <select name="method" id="method" class="form-select">
                    <option value="cosine">Cosine Similarity</option>
                    <option value="pearson">Pearson Correlation</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Get Recommendations</button>
        </form>

        @if (isset($recommendedHotels))
            @foreach($recommendedHotels as $hotel)
            <div class="mt-4">
                <h3>Recommended Hotel ID: {{ $hotel->id }}</h3>
                <!-- Optionally, display hotel details here -->
            </div>
            @endforeach
        @endif
    </div>
@endsection
