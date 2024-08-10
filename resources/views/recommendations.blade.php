@extends('user_layouts.app')

@section('content')
<div class="container">
    <h1>Recommended Hotels</h1>

    <form action="{{ route('recommendations.process') }}" method="POST" class="form-inline mb-3">
        @csrf
        <label for="method" class="mr-2">Select Method:</label>
        <select name="method" id="method" class="form-control mr-2">
            <option value="cosine" {{ old('method') === 'cosine' ? 'selected' : '' }}>Cosine Similarity</option>
            <option value="pearson" {{ old('method') === 'pearson' ? 'selected' : '' }}>Pearson Correlation</option>
        </select>
        <button type="submit" class="btn btn-primary">Get Recommendations</button>
    </form>



    @if(isset($recommendedHotels))
        @if($recommendedHotels->isEmpty())
            <p>No recommendations available at the moment.</p>
        @else
            <ul>
                @foreach($recommendedHotels as $hotel)
                    <li>{{ $hotel->name }}</li>
                @endforeach
            </ul>
        @endif
    @else
    <p>No recommendations available at the moment.</p>

    @endif
</div>
@endsection